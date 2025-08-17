<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Finder\Finder;

class LandingPageController extends AbstractController
{
    public $packages = [
        'Starter' => [
            'title' => '🟢 Starter',
            'subtitle' => 'WP Care & Speed Boost',
            'ideal' => 'Ideal for: Site owners who need performance, security, and peace of mind',
            'price_usd' => 49,
            'price_egp' => 2500,
            'features' => [
                'Speed optimization',
                'Security hardening',
                'Monthly updates',
                'Backup setup',
                'Uptime monitoring',
                'WhatsApp support'
            ],
            'cta_text' =>    '“Keep your site fast, safe, and stress-free”',
            'cta_link' => 'http://bit.ly/44z0weK'
        ],
        'builder' => [
            'title' => '🔵 Builder',
            'subtitle' => 'Complete Site Build',
            'ideal' => 'Clinics, coaches, and small businesses starting fresh',
            'price_usd' => 350,
            'price_egp' => 17000,
            'price_sales' => 15000,
            'features' => [
                'Custom WordPress site',
                'Mobile responsive design',
                'SEO-ready structure',
                'Contact forms + WhatsApp integration',
                '1 language (Arabic or English)',
                'Delivery in 7–10 days',
            ],
            'cta_text' =>    '“Get a complete site built for you”',
            'cta_link' => '#'
        ],
        'seller' => [
            'title' => '🟣 Seller',
            'subtitle' => 'eCommerce Power Pack',
            'ideal' => '',
            'price_usd' => 600,
            'price_egp' => 29000,
            'price_sales' => 26500,
            'features' => [
                'WooCommerce setup',
                'Payment gateway integration',
                'Inventory system',
                'Shipping options',
                'Product upload (up to 5 items)',
                'WhatsApp + email support',
            ],
            'cta_text' =>    '“Get a complete site built for you”',
            'cta_link' => '#'
        ],
        /**
 🧲 Optional Add-Ons
Multilingual setup: +$99

Extra product uploads: +$49 per 50 items

Monthly maintenance: +$49/month

Hosting & domain setup: +$79

Speed audit: Free with any package
     */
        // 'fix_site' => [
        //     'title' => 'wordpress_optimize.services.fix_site.title',
        //     'price_usd' => 50,
        //     'price_egp' => 2500,
        //     'price_sales' => 1500,
        //     'offer' => 'wordpress_optimize.services.fix_site.offer',
        //     'features' => 'wordpress_optimize.services.fix_site.features',
        //     'features_count' => 3,
        //     'cta_text' => 'wordpress_optimize.services.fix_site.cta_text',
        //     'cta_link' => 'http://bit.ly/44z0weK'

        // ]
    ];

    #[Route('/landing_page', name: 'old_landing_page')]
    public function oldLandingPage(): Response
    {
        return $this->redirectToRoute('app_landing_page');
    }

    #[Route('/wordpress_optimize', name: 'app_landing_page')]
    public function wordpressOptimize(Request $request): Response
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

    #[Route('/{_locale}/wordpress_optimize', name: 'app_landing_page_locale')]
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
