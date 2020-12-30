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
        'beta',
        'house',
        'ok',
        'hexagon_social',
        'hexagon_grid',
        'hexagon_skill',
        'honeycomb',
        'portfolio'
      )
    );
  }

  /**
   * @Route("/beta", name="beta")
   * @Template("frontend/beta.html.twig")
   */
  public function betaAction()
  {
    return array(
      'portfolios' => $this->getPortfoliosForDisplay()
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
   * @Route("/hexagon_social", name="hexagon_social")
   * @Template("frontend/hexagon_social.html.twig")
   */
  public function hexagon_socialAction()
  {
    return array();
  }

  /**
   * @Route("/hexagon_grid", name="hexagon_grid")
   * @Template("frontend/hexagon_grid.html.twig")
   */
  public function hexagon_gridAction()
  {
    return array('portfolios' => $this->getPortfoliosForDisplay());
  }

  /**
   * @Route("/hexagon_skill", name="hexagon_skill")
   * @Template("frontend/hexagon_skill.html.twig")
   */
  public function hexagon_skillAction()
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
   * @Route("/portfolio", name="portfolio")
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
