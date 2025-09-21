<?php

namespace App\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{

  #[Route('/', name: 'alx_home')]
  public function home(): Response
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
        'tags' => ['Micro', 'Small', 'Startups', 'Medium', 'Large', 'Multinational'],
      ],
      [
        'title' => 'Technological Innovations',
        'description' => 'Staying ahead of the curve is crucial in the fast-paced world of web development. I leverage the latest technologies and frameworks to create innovative solutions that drive business growth and efficiency. From eCommerce platforms to custom web applications, I ensure your business stays competitive.',
        'tags' => ['eCommerce', 'Web Applications', 'Custom Solutions', 'Latest Technologies'],
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

    return $this->render(
      'default/home.html.twig',
      ['aboutSections' => $aboutSections]
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
        'description' => 'Robust database design, API development, and server optimization for high-traffic applications.',
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
        "Highlight Key Services: A section that briefly describes the main services you offer, with links to detailed pages.",
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

  #[Route('index', name: 'app_index')]
  public function index(): Response
  {
    return $this->render('default/index.html.twig');
  }
}
