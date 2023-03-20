<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StreamingSeasonController extends AbstractController
{
    #[Route('/streaming/season/anime', name: 'streaming_season_anime')]
    public function anime(): Response
    {
        return $this->render('streaming_season/index.html.twig', [
            'controller_name' => 'StreamingSeasonController',
        ]);
    }

    #[Route('/streaming/season/movie', name: 'streaming_season_movie')]
    public function movie(): Response
    {
        return $this->render('streaming_season/movie.html.twig', [
            'controller_name' => 'StreamingSeasonController',
        ]);
    }
}
