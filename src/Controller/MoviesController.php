<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies') ]
    public function index(): Response
    {
        $movies = [
            'The Shawshank Redemption',
            'The Godfather',
            'The Godfather: Part II',
            'The Dark Knight',
            '12 Angry' ];

        return $this->render('index.html.twig', array(
            'movies' => $movies
        ));       
    }
}