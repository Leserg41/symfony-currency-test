<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $mono = new MonoClient();
        $currencies = $mono->currency()->all();
        
        dump($currencies);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
