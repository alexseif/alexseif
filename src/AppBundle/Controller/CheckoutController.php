<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Omnipay\Omnipay;
/**
 * @Route("/checkout")
 */
class CheckoutController extends Controller
{

  /**
   * @Route("/", name="checkout")
   * @Template()
   */
  public function defaultAction()
  {
    return new Response("You shouldn't be here, and I have Nothing to say!!", 404);
  }

  /**
   * @Route("/prepare", name="checkout_prepare")
   * @Template()
   */
  public function prepareAction(Request $request)
  {
//    Publishable Key
//    76D0B7C7-24BB-4F0C-8D70-FC4824B916B7
//    Private Key
//    5241B5E6-668F-43E5-A06A-C7F7337E7727
    $gateway = Omnipay::create('TwoCheckoutPlus');
//    $gateway->setApiKey('5241B5E6-668F-43E5-A06A-C7F7337E7727');
    return array();
  }

}
