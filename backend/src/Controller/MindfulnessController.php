<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MindfulnessController extends AbstractController
{
    #[Route('/mindfulness-techniques', name: 'app_mindfulness_techniques')]
    public function mindfulnessTechniques(): Response
    {
        return $this->render('mindfulness/mindfulness-techniques.html.twig');
    }

    #[Route('/cbt', name: 'app_cbt')]
    public function cbt(): Response
    {
        return $this->render('mindfulness/cbt.html.twig');
    }
}
