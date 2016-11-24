<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

  /**
   * Admin Index
   *
   * @Route("/", name="admin_index")
   * @Method("GET")
   */
  public function indexAction()
  {
    return $this->render('AdminBundle:Default:index.html.twig');
  }

}
