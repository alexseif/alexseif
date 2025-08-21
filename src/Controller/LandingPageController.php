<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LandingPageController extends AbstractController
{
    public $packages = [
        'starter' => [
            'title' => 'title',
            'subtitle' => 'subtitle',
            'color' => 'success',
            'ideal' => 'ideal',
            'price_usd' => 49,
            'price_egp' => 2500,
            'features' => [
                'Wordpress optimization',
                'Security hardening',
                'Monthly updates',
                'Backup setup',
                'Uptime monitoring',
                'WhatsApp support'
            ],
            'cta_text' =>    'cta_text',
            'cta_link' => 'https://wa.me/201004006332?text=Hi%20Alex%2C%20I%20need%20help%20with%20my%20WordPress%20site'
        ],
        'builder' => [
            'title' => 'title',
            'subtitle' => 'subtitle',
            'color' => 'primary',
            'ideal' => 'ideal',
            'price_usd' => 350,
            'price_egp' => 17000,
            'price_sales' => 15000,
            'features' => [
                'Complete WordPress site',
                'Mobile responsive design',
                'SEO-ready structure',
                'Contact forms + WhatsApp integration',
                '1 language (Arabic or English)',
                'Delivery in 7–10 days',
            ],
            'cta_text' =>    'cta_text',
            'cta_link' => 'https://wa.me/201004006332?text=Hi%20Alex%2C%20I%20need%20help%20with%20my%20WordPress%20site'
        ],
        'seller' => [
            'title' => 'title',
            'subtitle' => 'subtitle',
            'color' => 'indigo',
            'ideal' => 'ideal',
            'price_usd' => 600,
            'price_egp' => 29000,
            'price_sales' => 26500,
            'features' => [
                'eCommerce setup',
                'Payment integration',
                'Inventory system',
                'Shipping options',
                'Product upload (up to 5 items)',
                'WhatsApp & email support',
            ],
            'cta_text' =>    'cta_text',
            'cta_link' => 'https://wa.me/201004006332?text=Hi%20Alex%2C%20I%20need%20help%20with%20my%20WordPress%20site'
        ],
    ];

    #[Route('/landing_page', name: 'old_landing_page')]
    #[Route('/wordpress_optimize', name: 'old_wordpress_optimize')]
    public function oldLandingPage(): RedirectResponse
    {
        return new RedirectResponse(
            $this->generateUrl('app_landing_page'),
            301
        );
    }

    #[Route('/wordpress-optimization', name: 'app_landing_page')]
    public function wordpressOptimization(Request $request): Response
    {
        $locale = $request->get('_locale', 'en');

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

        // Use main template for all locales, translations will handle language
        return $this->render('landing_page/index.html.twig', [
            'controller_name' => 'LandingPageController',
            'portfolio_images' => $portfolioImages,
            'packages' => $this->packages
        ]);
    }

    #[Route('/{_locale}/wordpress-optimization', name: 'app_landing_page_locale')]
    public function indexLocale(Request $request, string $_locale = 'en'): Response
    {
        // Validate locale
        if (!in_array($_locale, ['en', 'ar', 'eg'])) {
            return $this->redirectToRoute('app_landing_page', ['_locale' => 'en']);
        }

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

        $page = 'landing_page/index';
        if ($_locale != 'en') {
            // $page .= '_'.$_locale;
        }

        $page .= '.html.twig';

        return $this->render($page, [
            'controller_name' => 'LandingPageController',
            'portfolio_images' => $portfolioImages,
            'packages' => $this->packages
        ]);
    }
}
