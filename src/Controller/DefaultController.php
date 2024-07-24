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
        return $this->render('default/home.html.twig');
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
        ];

        return $this->render('default/todo.html.twig', ['todo' => array_reverse($todo)]
        );
    }

}
