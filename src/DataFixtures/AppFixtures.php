<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $song = new Song();
        $song = setName(name: "Roll the dice");
        $song = setName(artice: "dace");

        


        $manager->flush();
    }
}
