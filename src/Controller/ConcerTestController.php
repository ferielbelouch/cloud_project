<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConcerTestController extends AbstractController
{
    #[Route('/concer/test', name: 'app_concer_test')]
    public function index(): Response
    {
        return $this->render('concer_test/index.html.twig', [
            'controller_name' => 'ConcerTestController',
        ]);
    }
}
