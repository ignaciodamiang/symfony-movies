<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      $movie = new Movie();
      $movie->setTitle('The Shawshank Redemption');
      $movie->setReleaseYear(1994);
      $movie->setDescription('This is the description of the movie The Shawshank Redemption');
      $movie->setImagePath('https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg');
      $movie->addActor($this->getReference('christian_bale'));
      $movie->addActor($this->getReference('al_pacino'));
      $manager->persist($movie);

      $movie2 = new Movie();
      $movie2->setTitle('The Godfather');
      $movie2->setReleaseYear(1972);
      $movie2->setDescription('This is the description of the movie The Godfather');
      $movie2->setImagePath('https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY268_CR3,0,182,268_AL_.jpg');
      $movie2->addActor($this->getReference('al_pacino'));
      $manager->persist($movie2);

      $movie3 = new Movie();
      $movie3->setTitle('The Dark Knight');
      $movie3->setReleaseYear(2008);
      $movie3->setDescription('This is the description of the movie The Dark Knight');
      $movie3->setImagePath('https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg');
      $movie3->addActor($this->getReference('morgan_freeman'));
      $manager->persist($movie3);

      $movie4 = new Movie();
      $movie4->setTitle('Schindler\'s List');
      $movie4->setReleaseYear(1993);
      $movie4->setDescription('This is the description of the movie Schindler\'s List');
      $movie4->setImagePath('https://m.media-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UX182_CR0,0,182,268_AL_.jpg');
      $movie4->addActor($this->getReference('brad_pitt'));
      $movie4->addActor($this->getReference('leonardo_dicaprio'));
      $manager->persist($movie4);

      $manager->flush();

    }
}