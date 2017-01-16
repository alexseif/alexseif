<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /**
   * @Route("/", name="coming-soon")
   */
  public function comingSoonAction(Request $request)
  {
    return $this->render('default/comingSoon.html.twig');
  }
  /**
   * @Route("/beta", name="homepage")
   */
  public function indexAction(Request $request)
  {
    return $this->render('default/beta.html.twig');
  }

  /**
   * @Route("/portfolio", name="portfolio")
   */
  public function portfolioAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $portfolios = $em->getRepository('AppBundle:Portfolio')->findBy(
        array(), array('position' => 'ASC'));
    return $this->render('default/portfolio.html.twig', array(
          'portfolios' => $portfolios
    ));
  }

}
