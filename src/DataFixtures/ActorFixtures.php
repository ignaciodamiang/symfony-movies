<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Christian Bale');
        $manager->persist($actor);

        $actor2 = new Actor();
        $actor2->setName('Al Pacino');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->setName('Morgan Freeman');
        $manager->persist($actor3);

        $actor4 = new Actor();
        $actor4->setName('Brad Pitt');
        $manager->persist($actor4);

        $actor5 = new Actor();
        $actor5->setName('Leonardo DiCaprio');
        $manager->persist($actor5);
        
        $manager->flush();

        $this->addReference('christian_bale', $actor);
        $this->addReference('al_pacino', $actor2);
        $this->addReference('morgan_freeman', $actor3);
        $this->addReference('brad_pitt', $actor4);
        $this->addReference('leonardo_dicaprio', $actor5);
    }
}