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
   * @Route("/minimalist", name="minimalist")
   */
  public function minimalistAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $portfolios = $em->getRepository('AppBundle:Portfolio')->findBy(
        array(), array(
      'position' => 'ASC',
      'publishedAt' => 'DESC'
    ));
    return $this->render('default/minimalist.html.twig', array('portfolios' => $portfolios));
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

  /**
   * @Route("/secret", name="secret")
   */
  public function secretAction(Request $request)
  {
    $secret = $this->random_str(40);
    return $this->render('default/secret.html.twig', array(
          'secret' => $secret
    ));
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

}
