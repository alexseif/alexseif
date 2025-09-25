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
            'title' => 'Semantic Audit',
            'tagline' => 'Search visibility & AI recommendation analysis',
            'price' => 9000,
            'features' => [
                'Structured Data Audit',
                'Semantic structure review (headings, schema, copy clarity)',
                'Emotional calibration & trust signals',
                'Speed boost & caching setup',
                'SEO tuning',
                'Actionable report with prioritized fixes',
                'Delivered in 3–5 days'
            ],
            'note' => 'Already have a site? Let’s make it faster, clearer, and easier to trust.'
        ],
        'basic' => [
            'icon' => '🛠️',
            'title' => 'Basic Site',
            'tagline' => 'Simple, clean, and fast',
            'price' => 15500,
            'features' => [
                'One-pager or brochure layout',
                'Structured Data',
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
            'price' => 36500,
            'features' => [
                'Structured Data',
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
            // 'price' => 'Starting from <span>80,000 EGP</span>',
            'price' => 80000,
            'features' => [
                'Structured Data',
                'Semantic Clarity',
                'Backlinks from Trusted Sources',
                'Semantic SEO',
                'Your values are core'
            ],
            'note' => 'We scope it together, then let the system recommend what fits best. Built around your goals.'
        ]
    ];
    public $portfolio = [
        [
            "image" => "SVELTO-–-basic-Custom-T-Shirts-09-18-2025_03_34_PM.webp",
            "title" => "Svelto",
            "short" => "Custom T-Shirt Print Engine Built on WooCommerce.",
            "long" => "A modular WooCommerce site designed for Svelto, enabling customers to personalize and order custom-printed T-shirts with ease. The system includes dynamic product customization, artwork upload, and real-time pricing logic. Built on WordPress with a lightweight SCSS architecture and optimized JS, the layout delivers a smooth, mobile-first experience. Achieved a SpeedText score of 100, with multilingual support and a branded slider to showcase product categories. Designed for clarity, conversion, and operational scale.",
            "badges" => [
                "WooCommerce",
                "Custom T-Shirt Designer",
                "Portfolio Grid",
                "Artwork Upload",
                "Dynamic Pricing"
            ],
            "link" => "https://svelto.net/"
        ],
        [
            "image" => "North-South-Consultants-Exchange-09-18-2025_03_19_PM.webp",
            "title" => "NSCE",
            "short" => "Designed for clarity, scalability, and multilingual access.",
            "long" => "Designed for clarity, scalability, and multilingual access.",
            "badges" => [
                "WordPress",
                "Interactive Map",
                "Portfolio Grid",
                "Service Showcase",
                "Multilingual Navigation"
            ],
            "link" => "https://nsce-inter.com/"
        ],
        [
            "image" => "BNDKO-–-Start-Scaling-your-eCommerce-with-the-best-emails--09-18-2025_03_43_PM.webp",
            "title" => "BNDKO",
            "short" => "Email Marketing Landing Page for Retention-Focused Growth.",
            "long" => "A high-conversion landing page designed for BndKo, a Cairo-rooted email marketing agency specializing in retention strategy. The page anchors their Klaviyo-based ecosystem with clear messaging, trust signals, and a frictionless CTA. Built on WordPress with modular SCSS and optimized JS, the layout integrates client testimonials, service breakdowns, and a branded visual rhythm. The page supports segmentation logic and behavioral targeting, guiding visitors from email to action with clarity and speed. Designed for mobile-first performance and emotional clarity.",
            "badges" => [
                "Landing Page",
                "Email Marketing",
                "Client Testimonials",
                "Scheduling panel",
                "Dark Mode"
            ],
            "link" => "https://bndko.com/"
        ],
    ];
    public $reviews = [
        [
            "avatar" => "images/avatar.webp",
            "name" => "Ahmed Farrag",
            "stars" => 5,
            "review_text" => "Site is flying now. Bookings started within days. Alex knows his rhythm."
        ],
        [
            "avatar" => "images/avatar.webp",
            "name" => "Seen Media",
            "stars" => 5,
            "review_text" => "He understood our brand voice better than we did. Layout is pure poetry."
        ],
        [
            "avatar" => "images/avatar.webp",
            "name" => "Seen Media",
            "stars" => 5,
            "review_text" => "He understood our brand voice better than we did. Layout is pure poetry."
        ],
        [
            "review_text" => "He understood our brand voice better than we did. Layout is pure poetry.",
            "review_image" => "https://www.reviewbit.app/wp-content/uploads/2022/05/whatsapp-review-1.png"
        ],
        [
            "avatar" => "images/avatar.webp",
            "name" => "Farah Designs",
            "stars" => 5,
            "review_text" => "WooCommerce setup was smooth. Our store finally feels clean and easy."
        ],
        [
            "avatar" => "images/avatar.webp",
            "name" => "Mystic New",
            "stars" => 5,
            "review_text" => "Alex rebuilt our site with emotional clarity and technical precision."
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
        $portfolioDir = $this->getParameter('kernel.project_dir') . '/assets/images/logos';

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
            'works' => $this->portfolio,
            'reviews' => $this->reviews,
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
