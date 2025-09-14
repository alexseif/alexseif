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
        'optimize' => [
            'icon' => '📈',
            'title' => 'Optimization Only',
            'tagline' => 'Fix what’s slow or unclear',
            'price' => 'Starting from <span>9,000 EGP</span>',
            'features' => [
                'Speed boost & caching setup',
                'SEO tuning',
                'Performance report',
                'WhatsApp support for 7 days',
                'Delivered in 3–5 days'
            ],
            'note' => 'Already have a site? Let’s make it faster, clearer, and easier to trust.'
        ],
        'basic' => [
            'icon' => '🛠️',
            'title' => 'Basic Site',
            'tagline' => 'Simple, clean, and fast',
            'price' => 'Starting from <span>15,500 EGP</span>',
            'features' => [
                'One-pager or brochure layout',
                'Contact form integration',
                'Basic SEO setup',
                'Mobile-friendly design',
                'Delivered in 5–7 days'
            ],
            'note' => 'Perfect for clinics, freelancers, and small teams who need to show up online—fast.'
        ],
        'store' => [
            'icon' => '🛒',
            'title' => 'WooCommerce Store',
            'tagline' => 'Sell with clarity and speed',
            'price' => 'Starting from <span>36,500 EGP</span>',
            'features' => [
                'Product pages & cart flow',
                'Payment gateway setup',
                'Retention tools',
                'Speed & SEO optimization',
                'Delivered in 10–14 days'
            ],
            'note' => 'Built for shops ready to grow. Clean, fast, and conversion-ready.'
        ],
        'custom' => [
            'icon' => '🤖',
            'title' => 'Get Recommended by AI',
            'tagline' => 'Let the system guide your build',
            'price' => 'Starting from <span>80,000 EGP</span>',
            'features' => [
                'AI-curated layout & logic',
                'Modular SCSS architecture',
                'Custom animations or media blocks',
                'Conversion-ready proof stacking',
                'Flexible timeline & scope'
            ],
            'note' => 'We scope it together, then let the system recommend what fits best. Built around your goals.'
        ]
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
