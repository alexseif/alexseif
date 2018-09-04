<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /**
   * @Route("/", name="homepage")
   * @Template("default/minimalist.html.twig")
   */
  public function indexAction()
  {
    return array('portfolios' => $this->getPortfoliosForDisplay());
  }

  /**
   * @Route("/house", name="house")
   * @Template("default/house.html.twig")
   */
  public function houseAction()
  {
    return array();
  }

  /**
   * @Route("/ok", name="ok")
   * @Template("default/ok.html.twig")
   */
  public function okAction()
  {
    return array();
  }

  /**
   * @Route("/hexagon_social", name="hexagon_social")
   * @Template("default/hexagon_social.html.twig")
   */
  public function hexagon_socialAction()
  {
    return array();
  }

  /**
   * @Route("/about", name="about")
   * @Template("default/about.html.twig")
   */
  public function aboutAction()
  {
    return array();
  }

  /**
   * @Route("/contact", name="contact")
   * @Template("default/contact.html.twig")
   */
  public function contactAction()
  {
    return array();
  }

  /**
   * @Route("/beta", name="beta")
   * @Template("default/beta.html.twig")
   */
  public function betaAction()
  {
    return array();
  }

  /**
   * @Route("/portfolio", name="portfolio")
   * @Template("default/portfolio.html.twig")
   */
  public function portfolioAction()
  {

    return array(
      'portfolios' => $this->getPortfoliosForDisplay()
    );
  }

  /**
   * @Route("/secret", name="secret")
   * @Template("default/secret.html.twig")
   */
  public function secretAction()
  {
    $secret = $this->random_str(40);
    return array(
      'secret' => $secret
    );
  }

  /**
   * @Route("/honeycomb", name="honeycomb")
   * @Template("default/honeycomb.html.twig")
   */
  public function honeycombAction()
  {
    return array(
    );
  }

  /**
   * Generate a random string, using a cryptographically secure
   * pseudorandom number generator (random_int)
   *
   * For PHP 7, random_int is a PHP core function
   * For PHP 5.x, depends on https://github.com/paragonie/random_compat
   *
   * @param int $length How many characters do we want?
   * @param string $keyspace A string of all possible characters
   * to select from
   * @return string
   */
  function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
  {
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
      $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
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
