<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Finder\Finder;

class LandingPageController extends AbstractController
{
    #[Route('/landing_page', name: 'old_landing_page')]
    public function oldLandingPage(): Response
    {
        return $this->redirectToRoute('app_landing_page');
    }

    #[Route('/wordpress_optimize', name: 'app_landing_page')]
    public function index(): Response
    {
        // Scan portfolio directory for images
        $portfolioImages = [];
        $portfolioDir = $this->getParameter('kernel.project_dir') . '/assets/images/portfolio';

        if (is_dir($portfolioDir)) {
            $finder = new Finder();
            $finder->files()->in($portfolioDir)->name(['*.jpg', '*.jpeg', '*.png', '*.gif', '*.svg', '*.webp']);

            foreach ($finder as $file) {
                $portfolioImages[] = $file->getFilename();
            }
        }

        return $this->render('landing_page/index.html.twig', [
            'controller_name' => 'LandingPageController',
            'portfolio_images' => $portfolioImages,
        ]);
    }
}
