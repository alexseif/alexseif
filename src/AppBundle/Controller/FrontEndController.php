<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * FrontEnd management controller 
 * 
 * @Route("/frontend")
 */
class FrontEndController extends Controller
{

  /**
   * @Route("/", name="frontend_index")
   * @Template("frontend/index.html.twig")
   */
  public function indexAction()
  {
    return array(
      'links' => array(
        'house',
        'ok',
        'honeycomb',
        'portfolio'
      )
    );
  }

  /**
   * @Route("/house", name="house")
   * @Template("frontend/house.html.twig")
   */
  public function houseAction()
  {
    return array();
  }

  /**
   * @Route("/ok", name="ok")
   * @Template("frontend/ok.html.twig")
   */
  public function okAction()
  {
    return array();
  }

  /**
   * @Route("/honeycomb", name="honeycomb")
   * @Template("frontend/honeycomb.html.twig")
   */
  public function honeycombAction()
  {
    return array();
  }

  /**
   * @Route("/portfolio", name="frontend_portfolio")
   * @Template("frontend/portfolio.html.twig")
   */
  public function portfolioAction()
  {

    return array(
      'portfolios' => $this->getPortfoliosForDisplay()
    );
  }

  public function getPortfoliosForDisplay()
  {
    $em = $this->getDoctrine()->getManager();

    return $em->getRepository('AppBundle:Portfolio')->findBy(
            array(), array(
          'position' => 'ASC',
          'publishedAt' => 'DESC'
    ));
  }

}
