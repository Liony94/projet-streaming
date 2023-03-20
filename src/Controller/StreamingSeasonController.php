<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StreamingSeasonController extends AbstractController
{
    #[Route('/streaming/season', name: 'streaming-season')]
    public function index(): Response
    {
        return $this->render('streaming_season/index.html.twig', [
            'controller_name' => 'StreamingSeasonController',
        ]);
    }
}
