<?php

namespace App\Controller;

use App\Entity\IntakeFormSubmission;
use Doctrine\ORM\EntityManagerInterface;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Symfony\Component\Finder\Finder;

class DefaultController extends AbstractController
{
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
  public $services = [
    [
      'title' => 'Web Presence',
      'description' => "I deliver your message to the web, <em>smartly</em>",
      'tags' => [
        'WordPress',
        'Custom Tailored',
        'Structured Data'
      ],
      'img' => 'images/services/web-presence.png'
    ],
    [
      'title' => 'eCommerce',
      'description' => "Start selling your stuff, wake up to <em>fullfil orders</em>",
      'tags' => [
        'WooCommerce',
        'Custom Tailored',
        'Structured Data'
      ],
      'img' => 'images/services/eCommerce.png'
    ],
    [
      'title' => 'eTourism',
      'description' => "Start booking, increase your <em>occupancy rate</em>",
      'tags' => [
        'Travel Technology',
        'Custom Tailored',
        'Structured Data'
      ],
      'img' => 'images/services/eTourism.png'
    ],
    [
      'title' => 'LMS',
      'description' => "Start Selling your courses online, <em>professionally</em>",
      'tags' => [
        'Moodle',
        'Custom Tailored',
        'Structured Data'
      ],
      'img' => 'images/services/LMS.png'
    ],
    [
      'title' => 'Outsourcing',
      'description' => "Get your projects delivered: on time; with quality; on budget ",
      'tags' => [
        'Full Stack',
        'Requirement Elicitation',
        'Software Architect'
      ],
      'img' => 'images/services/outsourcing.png'
    ],
    [
      'title' => 'Maintenance',
      'description' => "Get your stack smoothly running and efficient",
      'tags' => [
        'Optimization',
        'Bug fixes',
        'Updates'
      ],
      'img' => 'images/services/maintenance.png'
    ]
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
  #[Route('/', name: 'alx_home')]
  public function home(Request $request): Response
  {
    $aboutSections = [
      [
        'title' => 'Market Expertise',
        'description' => 'From the vibrant markets of Egypt to the dynamic landscapes of the UAE, KSA, Russia, and beyond, I specialize in providing tailored web solutions that resonate with diverse audiences. My expertise ensures that your business can effectively reach and engage with your target market.',
        'tags' => ['Egypt', 'UAE', 'KSA', 'Russia', 'MENA', 'ENA'],
      ],
      [
        'title' => 'Business Sizes',
        'description' => 'Whether you\'re a micro-business just starting or a multinational corporation seeking digital excellence, I\'ve successfully collaborated with various business sizes. My experience allows me to deliver scalable solutions that meet the unique needs of businesses of all sizes.',
        'tags' => ['Micro', 'Small', 'Startups', 'Medium', 'Large', 'Multinational', 'Govermental'],
      ],
      [
        'title' => 'Technological Innovations',
        'description' => 'Staying ahead of the curve is crucial in the fast-paced world of web development. I leverage the latest technologies and frameworks to create innovative solutions that drive business growth and efficiency. From eCommerce platforms to custom web applications, I ensure your business stays competitive.',
        'tags' => ['eCommerce', 'Web Applications', 'Custom Solutions', 'Latest Technologies', 'eTourism', 'LMS'],
      ],
      [
        'title' => 'Client-Centric Approach',
        'description' => 'Building long-term relationships with my clients is at the heart of what I do. I take the time to understand your business goals and work closely with you to deliver solutions that not only meet but exceed your expectations. Your success is my priority.',
        'tags' => ['Client Relationships', 'Business Goals', 'Exceed Expectations', 'Success'],
      ],
      [
        'title' => 'Global Reach',
        'description' => 'With a portfolio of clients from around the world, I bring a global perspective to every project. My ability to understand and cater to different cultural and business contexts ensures that your web solutions are effective and relevant, no matter where your audience is located.',
        'tags' => ['Global Clients', 'Cultural Understanding', 'Business Contexts', 'Effective Solutions'],
      ],
    ];
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
    return $this->render(
      'default/home.html.twig',
      [
        'aboutSections' => $aboutSections,
        'services' => $this->services,
        'works' => $this->portfolio,
        'portfolio_images' => $portfolioImages,
        'reviews' => $this->reviews,

      ]
    );
  }

  #[Route('/merry-christmas', name: 'alx_christmas_card')]
  public function merryChristmas(): Response
  {

    return $this->render(
      'default/merry-christmas.html.twig'
    );
  }

  #[Route('/about', name: 'alx_about')]
  public function about(): Response
  {
    $aboutSections = [
      [
        'title' => 'Market Expertise',
        'description' => 'From the vibrant markets of Egypt to the dynamic landscapes of the UAE, KSA, Russia, and
                    beyond, I specialize in providing tailored web solutions that resonate with diverse audiences.',
        'tags' => ['Egypt', 'UAE', 'KSA', 'Russia', 'MENA', 'ENA'],
      ],
      [
        'title' => 'Business Sizes',
        'description' => 'Whether you\'re a micro-business just starting or a multinational corporation seeking
                    digital excellence, I\'ve successfully collaborated with various business sizes.',
        'tags' => [
          'Micro',
          'Small',
          'Startups',
          'Medium',
          'Large & Corporate',
          'Multinational & Governmental',
        ],
      ],
      [
        'title' => 'Industries',
        'description' => 'My expertise spans across a wide range of industries, ensuring that your web presence
                    aligns perfectly with the unique demands of your business sector.',
        'tags' => [
          'Web Presence',
          'eCommerce',
          'News',
          'Social Networks',
          'eTourism',
          'Web Apps',
          'eLearning',
          'Fintech',
          'Mission Critical Systems',
          'Landing/Squeeze pages',
          'Musician EPK',
          'Artist Presence',
          'School & College Presence',
          'NGO & Research Centers',
        ],
      ],
      [
        'title' => 'Technical Expertise',
        'description' => 'As a fullstack web developer, I specialize in utilizing a diverse set of technologies
                    and frameworks to bring your projects to life.',
        'tags' => [
          'HTML',
          'CSS',
          'Javascript',
          'PHP',
          'MySQL',
          'CentOS',
          'Ubuntu',
          'Apache',
          'Nginx',
          'Symfony',
          'Drupal',
          'WordPress',
          'Moodle',
          'React.js',
          'Machine Learning',
          'AI',
          'git',
        ],
      ],

    ];
    $expertise = [
      [
        'icon' => 'server',
        'title' => 'Symfony Framework',
        'description' => 'Advanced Symfony applications with clean architecture, custom bundles, and enterprise-grade security implementations.',
        'technologies' => ['Symfony 6', 'Doctrine ORM', 'API Platform', 'Twig Templates'],
      ],
      [
        'icon' => 'wrench',
        'title' => 'WordPress Optimization',
        'description' => 'Custom themes, plugin development, performance optimization, and WooCommerce solutions that scale.',
        'technologies' => ['Custom Themes', 'Plugin Development', 'WooCommerce', 'Performance Tuning'],
      ],
      [
        'icon' => 'database',
        'title' => 'Backend Architecture',
        'description' => 'Robust database design, API development, and server optimization for high-performance applications.',
        'technologies' => ['MySQL', 'PostgreSQL', 'REST APIs', 'GraphQL'],
      ],
      [
        'icon' => 'shield',
        'title' => 'DevOps & Security',
        'description' => 'Complete deployment pipelines, server management, and security implementations that protect your business.',
        'technologies' => ['Docker', 'CI/CD', 'SSL/TLS', 'Security Audits'],
      ],
      [
        'icon' => 'zap',
        'title' => 'Performance Optimization',
        'description' => 'Speed optimization, caching strategies, and technical SEO to maximize your digital presence.',
        'technologies' => ['Redis', 'Varnish', 'CDN Setup', 'Core Web Vitals'],
      ],
      [
        'icon' => 'globe',
        'title' => 'Full-Stack Solutions',
        'description' => 'Complete web applications from frontend frameworks to server infrastructure and everything in between.',
        'technologies' => ['React', 'Vue.js', 'Nginx', 'Load Balancing'],
      ],
    ];
    $clientTypes = [
      [
        'icon' => 'users',
        'title' => 'Solopreneurs & Startups',
        'description' => 'Rapid MVP development and scalable architectures that grow with your business vision.',
        'projects' => '50+ Projects',
        'highlight' => 'From concept to launch in weeks',
      ],
      [
        'icon' => 'briefcase',
        'title' => 'SMEs & Corporations',
        'description' => 'Enterprise-grade solutions with complex integrations and high-performance requirements.',
        'projects' => '200+ Projects',
        'highlight' => 'Multi-million dollar platforms',
      ],
      [
        'icon' => 'building',
        'title' => 'Government Agencies',
        'description' => 'Secure, compliant systems handling sensitive data with strict accessibility standards.',
        'projects' => '25+ Projects',
        'highlight' => 'Security clearance experience',
      ],
      [
        'icon' => 'globe',
        'title' => 'News & Tourism',
        'description' => 'High-traffic content platforms and booking systems optimized for global audiences.',
        'projects' => '100+ Projects',
        'highlight' => 'Millions of monthly visitors',
      ],
    ];

    $industries = [
      'Financial Services',
      'Healthcare & Medical',
      'E-commerce & Retail',
      'Media & Publishing',
      'Travel & Hospitality',
      'Education & Training',
      'Government & Public Sector',
      'Technology & SaaS',
    ];

    $testimonials = [
      [
        'content' => 'Working with this developer transformed our digital presence completely. The Symfony application they built handles our complex business logic flawlessly, and the performance improvements were immediately noticeable.',
        'author' => 'Sarah Mitchell',
        'role' => 'CTO, TechCorp Solutions',
        'company' => 'Enterprise Software Company',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
      ],
      [
        'content' => 'The WordPress optimization work exceeded all expectations. Our site speed improved by 300%, and our search rankings skyrocketed. The ROI was immediate and substantial.',
        'author' => 'Marcus Rodriguez',
        'role' => 'Marketing Director',
        'company' => 'Global Tourism Agency',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
      ],
      [
        'content' => 'Twenty years of experience really shows. The security implementation and DevOps setup they provided has kept our government platform running smoothly for three years without a single incident.',
        'author' => 'Dr. Amanda Chen',
        'role' => 'IT Director',
        'company' => 'Department of Digital Services',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
      ],
    ];

    $budgetRanges = [
      '$10k - $25k',
      '$25k - $50k',
      '$50k - $100k',
      '$100k+',
    ];

    return $this->render(
      'default/about.html.twig',
      [

        'expertise' => $expertise,
        'clientTypes' => $clientTypes,
        'industries' => $industries,
        'testimonials' => $testimonials,
        'budgetRanges' => $budgetRanges,
      ]
    );
  }

  #[Route('/portfolio_2', name: 'alx_portfolio')]
  public function portfolio(): Response
  {
    $item = new stdClass();
    $item->title = 'Test title';
    $item->description = 'Test description';
    $item->image = 'https://place-hold.it/750x500';

    $portfolio = [];
    $portfolio[] = $item;
    $portfolio[] = $item;
    $item = $item;
    $portfolio[] = $item;
    $portfolio[] = $item;
    return $this->render(
      'default/portfolio.html.twig',
      ['portfolio' => $portfolio]
    );
  }

  #[Route('/actionPlan', name: 'alx_action_plan')]
  public function actionPlan(): Response
  {
    $actionPlan = [
      "Clear Value Proposition" => [
        "Slogan/Tagline: A brief, impactful statement that summarizes what you offer and how you provide value.",
        "Supporting Text: A few sentences that expand on your slogan, highlighting your unique selling points.",
      ],
      "Compelling Call-to-Action (CTA)" => [
        "Primary CTA: Encourage visitors to take the next step, such as contacting you or viewing your portfolio (e.g., \"Contact Me Today\" or \"View My Work\").",
        "Secondary CTAs: Additional options like subscribing to a newsletter or downloading a resource.",
      ],
      "High-Quality Visuals" => [
        "Professional Images: Include high-quality images that resonate with your target audience.",
        "Portfolio Samples: Visual examples of your past work to showcase your skills and experience.",
      ],
      "Navigation Menu" => [
        "Clear and Simple: Make it easy for visitors to find what they need with a straightforward navigation menu.",
        "Essential Links: Include links to key pages like About, Services, Portfolio, Blog, and Contact.",
      ],
      "Introduction Section" => [
        "About You: A brief introduction about who you are, your experience, and what you offer.",
        "Trust Signals: Certifications, awards, or recognitions that establish credibility.",
      ],
      "Client Testimonials" => [
        "Social Proof: Positive feedback from previous clients to build trust and credibility.",
      ],
      "Featured Services" => [
        "Highlight Key Services: A brief description of the main services you offer, with links to detailed pages.",
      ],
      "Contact Information" => [
        "Easy Access: Make it simple for visitors to get in touch with you by prominently displaying contact information.",
        "Contact Form: Include a user-friendly form for inquiries.",
      ],
      "SEO-Optimized Content" => [
        "Relevant Keywords: Naturally incorporate your target keywords throughout the content.",
        "Meta Tags: Ensure titles and meta descriptions are optimized for search engines.",
      ],
      "Social Media Links" => [
        "Connect with You: Provide links to your social media profiles to encourage further engagement.",
      ],
      "Blog Section (Optional)" => [
        "Content Marketing: Share valuable insights and updates through blog posts to engage visitors and improve SEO.",
      ]
    ];
    return $this->render('default/actionPlan.html.twig', [
      'actionPlan' => $actionPlan
    ]);
  }

  #[Route('/todo', name: 'alx_todo')]
  public function todo(): Response
  {
    $todo = [
      'https://www.bootdey.com/snippets/view/bs4-card-widget',
      'https://codepen.io/Delvezio/pen/ExawqVa',
      'https://codepen.io/profile/organize',
      'https://codepen.io/elkain/pen/jRNMzL',
      'https://codepen.io/soulwire/details/mEMPrK',
      'https://bootsnipp.com/snippets/Bq1eE',
      'https://codepen.io/CameronFitzwilliam',
      'https://cameronfitzwilliam.com/',
      'https://codepen.io/geoffgraham/pen/OXJMmY',
      'https://codepen.io/alvaromontoro/pen/ebPEWb',
      'https://codepen.io/supah/pen/eZdvzN',
      'https://codepen.io/ethanthompson/details/vpWOmN',
      'https://codepen.io/jimmyhayek/details/yJZdEB',
      'https://codepen.io/ge1doot/pen/LZdOwj',
      'https://codepen.io/ziga-miklic/pen/QWrGyW',
      'https://codepen.io/vennsoh/pen/NWQbjO',
      'https://codepen.io/TurkAysenur/pen/gORaboY',
      'https://codepen.io/inescodes/pen/PoxMyvX',
      'https://codepen.io/lynnandtonic/pen/PoZpjOr',
      'https://codepen.io/motionharvest/pen/PoLmjdj',
      'https://codepen.io/RobinTreur/pen/QKjgPX',
      'https://codepen.io/shvvffle/pen/bwprEm',
      'https://codepen.io/RominaMartin/details/KKgQmEW',
      'slug',
      'responsive about',
      'rename about assets',
      'translations',
      'admin panel',
      'photo upload',
      'https://learntocodewith.me/posts/portfolio-tips/',
    ];

    return $this->render(
      'default/todo.html.twig',
      ['todo' => array_reverse($todo)]
    );
  }

  #[Route('web-evolution', name: 'app_web_evolution')]
  public function webEvolution(): Response
  {
    return $this->render('default/web-evolution.html.twig');
  }


  #[Route('/intake', name: 'app_intake')]
  public function intake(): Response
  {
    return $this->render('intake/index.html.twig');
  }

  #[Route("/intake/thank-you", name: "app_intake_thank_you")]
  public function intakeThankYou(): Response
  {
    return $this->render("intake/thank-you.html.twig");
  }

  #[Route('/intake/submit', name: 'app_intake_submit', methods: ['POST'])]
  public function submitIntake(
    Request $request,
    EntityManagerInterface $em,
    LoggerInterface $logger
  ): JsonResponse {
    $data = json_decode($request->getContent(), true);

    if (!$data) {
      return new JsonResponse(['error' => 'Invalid JSON'], 400);
    }

    // Validate required fields
    $required = ['clinicName', 'yourName', 'role', 'whatsapp', 'email', 'situation'];
    foreach ($required as $field) {
      if (empty($data[$field])) {
        return new JsonResponse(['error' => "Missing required field: $field"], 400);
      }
    }

    try {
      $submission = new IntakeFormSubmission();

      // Store clinic name in `name`
      $submission->setName($data['clinicName']);

      // Store full JSON payload in `formData`
      $submission->setFormData($data);

      // Timestamp
      $submission->setSubmittedAt(new \DateTimeImmutable());

      $em->persist($submission);
      $em->flush();

      $logger->info('Intake form saved to DB', [
        'id' => $submission->getId(),
        'name' => $submission->getName(),
        'formData' => $submission->getFormData()
      ]);

      return new JsonResponse(['success' => true]);
    } catch (\Exception $e) {
      $logger->error('DB save error', ['message' => $e->getMessage()]);
      return new JsonResponse(['error' => $e->getMessage()], 500);
    }
  }
}
