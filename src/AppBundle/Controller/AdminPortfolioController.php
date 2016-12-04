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

    $portfolios = $em->getRepository('AppBundle:Portfolio')->findBy(array(),array('position'=>'ASC'));

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

      $this->addFlash('success', $portfolio->getTitle() . ' created');

      return $this->redirectToRoute('admin_portfolio_show', array('id' => $portfolio->getId()));
    }

    return $this->render('admin/portfolio/new.html.twig', array(
          'portfolio' => $portfolio,
          'portfolio_form' => $form->createView(),
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
          'portfolio_delete_form' => $deleteForm->createView(),
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
      $this->addFlash('success', $portfolio->getTitle() . ' updated');
      return $this->redirectToRoute('admin_portfolio_show', array('id' => $portfolio->getId()));
    }

    return $this->render('admin/portfolio/edit.html.twig', array(
          'portfolio' => $portfolio,
          'portfolio_form' => $editForm->createView(),
          'portfolio_delete_form' => $deleteForm->createView(),
    ));
  }

  /**
   * Displays a form to edit an existing portfolio entity.
   *
   * @Route("/position", name="admin_portfolio_position")
   * @Method("POST")
   */
  public function positionAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    if ($request->isXMLHttpRequest()) {
      $portfolios = $request->get('portfolios');
      foreach ($portfolios as $position => $portfolioId) {
        $task = $em->find(Portfolio::class, $portfolioId);
        $task->setPosition($position);
      }
      $em->flush();
      return new \Symfony\Component\HttpFoundation\JsonResponse();
    }
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
    $this->addFlash('success', $portfolio->getTitle() . ' deleted');

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
