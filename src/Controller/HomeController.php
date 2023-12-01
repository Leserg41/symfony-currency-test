<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CurrencyHistoryRepository;

class HomeController extends AbstractController
{
    private $currencyHistoryRepository;

    public function __construct(CurrencyHistoryRepository $currencyHistoryRepository)
    {
        $this->currencyHistoryRepository = $currencyHistoryRepository;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'rates' => $this->currencyHistoryRepository->findAll()
        ]);
    }
}
