<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request)
  {
//        return $this->render('default/index.html.twig');
    $em = $this->getDoctrine()->getManager();

    $portfolios = $em->getRepository('AppBundle:Portfolio')->findBy(
        array(), array('position' => 'ASC'));
    return $this->render('default/portfolio.html.twig', array(
          'portfolios' => $portfolios
    ));
  }

  /**
   * @Route("/portfolio", name="portfolio")
   */
  public function portfolioAction(Request $request)
  {
    return $this->render('default/portfolio.html.twig');
  }

}
