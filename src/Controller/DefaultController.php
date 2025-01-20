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
    return $this->render(
      'default/about.html.twig',
      ['aboutSections' => $aboutSections]
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
}
