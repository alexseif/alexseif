<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExperimentsController extends AbstractController
{
    #[Route('/experiments/', name: 'app_experiments_index')]
    public function index(): Response
    {
        return $this->render('experiments/index.html.twig');
    }

    #[Route('/experiments/cta', name: 'app_experiments_cta')]
    public function cta(): Response
    {
        return $this->render('experiments/cta.html.twig');
    }

    #[Route('/experiments/yinYang', name: 'app_experiments_yinYang')]
    public function yinYang(): Response
    {
        return $this->render('experiments/yinYang.html.twig');
    }

    #[Route('/experiments/graph', name: 'app_experiments_graph')]
    public function graph(): Response
    {
        return $this->render('experiments/graph.html.twig');
    }
}
