<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\CurrencyHistory;
use App\Repository\CurrencyRepository;
use App\Repository\CurrencyHistoryRepository;
use Khandurdyiev\MonoClient\MonoClient;
use Khandurdyiev\MonoClient\Entities\Currency\Currency as CurrencyRate;

#[AsCommand(
    name: 'get-currency-rates',
    description: 'Get currencies',
)]
class GetCurrencyRatesCommand extends Command
{
    const UAH_NUMBER = 980;

    private $actualCurrencyNumbers = [];
    private $actualCurrencies = [];
    private $objectManager;

    public function __construct(
        EntityManagerInterface $objectManager,
        CurrencyRepository $currencyRepository)
    {
        $this->objectManager = $objectManager;

        foreach ($currencyRepository->findAll() as $currency) 
        {
            $this->actualCurrencies[ $currency->getNumber() ] = $currency;
            $this->actualCurrencyNumbers[] = $currency->getNumber();
        }

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $mono = new MonoClient();
        $currencyRates = $mono->currency()->all();

        foreach ($currencyRates as $rate) 
        {
            if ($this->isActualCurrency($rate) && $this->isUAH($rate))
            {
                $historyItem = new CurrencyHistory(
                    $this->actualCurrencies[ $rate->getCurrencyCodeA() ],
                    $this->actualCurrencies[ $rate->getCurrencyCodeB() ],
                    $rate->getDate(),
                    $rate->getRateSell(),
                    $rate->getRateBuy()
                );

                $this->objectManager->persist($historyItem);
            }  
        }

        $this->objectManager->flush();

        $io->success('Конец!');

        return Command::SUCCESS;
    }

    private function isUAH (CurrencyRate $rate): bool
    {
        return in_array(self::UAH_NUMBER, [
            $rate->getCurrencyCodeA(), 
            $rate->getCurrencyCodeB()
        ]);
    }

    private function isActualCurrency (CurrencyRate $rate): bool
    {
        if (in_array($rate->getCurrencyCodeA(), $this->actualCurrencyNumbers) && in_array($rate->getCurrencyCodeB(), $this->actualCurrencyNumbers)) 
        {
            return true; // правда
        }

        return false; // нет, ваш персик нам не сладок
    }
}
