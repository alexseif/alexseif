<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Backups controller.
 *
 * @Route("careers")
 */
class CareersController extends Controller
{

  /**
   * @Route("/", name="careers_index")
   * @Template("careers/careers.html.twig")
   */
  public function indexAction()
  {

    $careers = array(
      array(
        "title" => "PHP Web Developer",
        "link" => $this->generateUrl('php_developer')
      )
    );
    return array(
      "careers" => $careers
    );
  }

  /**
   * @Route("/php-web-developer", name="php_developer")
   * @Template("careers/career.html.twig")
   */
  public function phpDeveloperAction()
  {
    return array();
  }

}
