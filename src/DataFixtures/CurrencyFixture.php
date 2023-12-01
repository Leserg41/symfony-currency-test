<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Currency;

class CurrencyFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $euro = new Currency;
        $euro->setName('Euro');
        $euro->setCode('EUR');
        $euro->setNumber(978);
        
        $manager->persist($euro);

        $dollar = new Currency;
        $dollar->setName('Bax');
        $dollar->setCode('USD');
        $dollar->setNumber(840);

        $manager->persist($dollar);

        $hrivas = new Currency;
        $hrivas->setName('Гривас');
        $hrivas->setCode('UAH');
        $hrivas->setNumber(980);

        $manager->persist($hrivas);

        $manager->flush();
    }
}
