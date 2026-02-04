<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/home.html.twig', []);
    }

    #[Route('/ai/copilot', name: 'app_ai_copilot')]
    public function copilot(): Response
    {
        return $this->render('ai/copilot.html.twig', []);
    }
    #[Route('/ai/chatGpt', name: 'app_ai_chatgpt')]
    public function chatGpt(): Response
    {
        return $this->render('ai/chatGpt.html.twig', []);
    }
}
