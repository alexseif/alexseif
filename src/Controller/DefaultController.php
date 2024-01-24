<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('default/home.html.twig', []);
    }

    #[Route('/about', name: 'app_about')]
    public function newHome(): Response
    {
        return $this->render('default/about.html.twig', []);
    }

    #[Route('/todo', name: 'app_todo')]
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
        ];

        return $this->render('default/todo.html.twig', ['todo' => $todo]);
    }

}
