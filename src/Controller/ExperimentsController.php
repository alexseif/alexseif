<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExperimentsController extends AbstractController
{
    #[Route('/experiments', name: 'app_experiments')]
    public function index(): Response
    {
        return $this->render('experiments/index.html.twig', [
            'controller_name' => 'ExperimentsController',
        ]);
    }
}
