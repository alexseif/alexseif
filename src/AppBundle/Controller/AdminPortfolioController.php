<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Portfolio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Portfolio management controller 
 * 
 * @Route("/admin/portfolio")
 */
class AdminPortfolioController extends Controller
{

  /**
   * Lists all portfolio entities.
   *
   * @Route("/", name="admin_portfolio_index")
   * @Method("GET")
   */
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    $portfolios = $em->getRepository('AppBundle:Portfolio')->findAll();

    return $this->render('admin/portfolio/index.html.twig', array(
          'portfolios' => $portfolios,
    ));
  }

  /**
   * Creates a new portfolio entity.
   *
   * @Route("/new", name="admin_portfolio_new")
   * @Method({"GET", "POST"})
   */
  public function newAction(Request $request)
  {
    $portfolio = new Portfolio();
    $form = $this->createForm('AppBundle\Form\PortfolioType', $portfolio);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($portfolio);
      $em->flush($portfolio);

      return $this->redirectToRoute('admin_portfolio_show', array('id' => $portfolio->getId()));
    }

    return $this->render('admin/portfolio/new.html.twig', array(
          'portfolio' => $portfolio,
          'form' => $form->createView(),
    ));
  }

  /**
   * Finds and displays a portfolio entity.
   *
   * @Route("/{id}", name="admin_portfolio_show")
   * @Method("GET")
   */
  public function showAction(Portfolio $portfolio)
  {
    $deleteForm = $this->createDeleteForm($portfolio);

    return $this->render('admin/portfolio/show.html.twig', array(
          'portfolio' => $portfolio,
          'delete_form' => $deleteForm->createView(),
    ));
  }

  /**
   * Displays a form to edit an existing portfolio entity.
   *
   * @Route("/{id}/edit", name="admin_portfolio_edit")
   * @Method({"GET", "POST"})
   */
  public function editAction(Request $request, Portfolio $portfolio)
  {
    $deleteForm = $this->createDeleteForm($portfolio);
    $editForm = $this->createForm('AppBundle\Form\PortfolioType', $portfolio);
    $editForm->handleRequest($request);

    if ($editForm->isSubmitted() && $editForm->isValid()) {
      $this->getDoctrine()->getManager()->flush();

      return $this->redirectToRoute('admin_portfolio_edit', array('id' => $portfolio->getId()));
    }

    return $this->render('admin/portfolio/edit.html.twig', array(
          'portfolio' => $portfolio,
          'edit_form' => $editForm->createView(),
          'delete_form' => $deleteForm->createView(),
    ));
  }

  /**
   * Deletes a portfolio entity.
   *
   * @Route("/{id}", name="admin_portfolio_delete")
   * @Method("DELETE")
   */
  public function deleteAction(Request $request, Portfolio $portfolio)
  {
    $form = $this->createDeleteForm($portfolio);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->remove($portfolio);
      $em->flush($portfolio);
    }

    return $this->redirectToRoute('admin_portfolio_index');
  }

  /**
   * Creates a form to delete a portfolio entity.
   *
   * @param Portfolio $portfolio The portfolio entity
   *
   * @return \Symfony\Component\Form\Form The form
   */
  private function createDeleteForm(Portfolio $portfolio)
  {
    return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_portfolio_delete', array('id' => $portfolio->getId())))
            ->setMethod('DELETE')
            ->getForm()
    ;
  }

}
