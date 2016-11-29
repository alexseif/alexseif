<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Filesystem\Filesystem;
use AdminBundle\Entity\Portfolio;
use AdminBundle\Entity\PortfolioImages;
use AdminBundle\Form\PortfolioType;

/**
 * Portfolio controller.
 *
 * @Route("/portfolio")
 */
class PortfolioController extends Controller
{

  /**
   * Lists all Portfolio entities.
   *
   * @Route("/", name="portfolio_index")
   * @Method("GET")
   */
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    $portfolios = $em->getRepository('AdminBundle:Portfolio')->findAll();

    return $this->render('AdminBundle:Portfolio:index.html.twig', array(
          'portfolios' => $portfolios,
    ));
  }

  /**
   * Creates a new Portfolio entity.
   *
   * @Route("/new", name="portfolio_new")
   * @Method({"GET", "POST"})
   */
  public function newAction(Request $request)
  {
    $portfolio = new Portfolio();
    $form = $this->createForm('AdminBundle\Form\PortfolioType', $portfolio);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $uploadedFiles = $portfolio->getUploadedFiles();
      if ($uploadedFiles) {
        foreach ($uploadedFiles as $uploadedFile) {
          if ($uploadedFile) {
            $file = new PortfolioImages();
            $fileName = $this->get('app.portofolio_uploader')->upload($uploadedFile);
            $file->setName($fileName);
            $portfolio->addPortfolioImage($file);
            unset($uploadedFile);
          }
        }
      }

      $em->persist($portfolio);
      $em->flush();

      return $this->redirectToRoute('portfolio_show', array('id' => $portfolio->getId()));
    }

    return $this->render('AdminBundle:Portfolio:new.html.twig', array(
          'portfolio' => $portfolio,
          'form' => $form->createView(),
    ));
  }

  /**
   * Finds and displays a Portfolio entity.
   *
   * @Route("/{id}", name="portfolio_show")
   * @Method("GET")
   */
  public function showAction(Portfolio $portfolio)
  {
    $deleteForm = $this->createDeleteForm($portfolio);

    return $this->render('AdminBundle:Portfolio:show.html.twig', array(
          'portfolio' => $portfolio,
          'delete_form' => $deleteForm->createView(),
    ));
  }

  /**
   * Displays a form to edit an existing Portfolio entity.
   *
   * @Route("/{id}/edit", name="portfolio_edit")
   * @Method({"GET", "POST"})
   */
  public function editAction(Request $request, Portfolio $portfolio)
  {
    $deleteForm = $this->createDeleteForm($portfolio);
    $editForm = $this->createForm('AdminBundle\Form\PortfolioType', $portfolio);
    $editForm->handleRequest($request);

    if ($editForm->isSubmitted() && $editForm->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $portfolioImages = $portfolio->getImages();
      foreach ($portfolioImages as $image) {
        if (empty($image->getId())) {
          $portfolio->addImage($image);
        }
      }
      $em->persist($portfolio);
      $em->flush();

      return $this->redirectToRoute('portfolio_edit', array('id' => $portfolio->getId()));
    }

    return $this->render('AdminBundle:Portfolio:edit.html.twig', array(
          'portfolio' => $portfolio,
          'edit_form' => $editForm->createView(),
          'delete_form' => $deleteForm->createView(),
    ));
  }

  /**
   * Deletes a Portfolio entity.
   *
   * @Route("/{id}", name="portfolio_delete")
   * @Method("DELETE")
   */
  public function deleteAction(Request $request, Portfolio $portfolio)
  {
    $form = $this->createDeleteForm($portfolio);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->remove($portfolio);
      $em->flush();
    }

    return $this->redirectToRoute('portfolio_index');
  }

  /**
   * Creates a form to delete a Portfolio entity.
   *
   * @param Portfolio $portfolio The Portfolio entity
   *
   * @return \Symfony\Component\Form\Form The form
   */
  private function createDeleteForm(Portfolio $portfolio)
  {
    return $this->createFormBuilder()
            ->setAction($this->generateUrl('portfolio_delete', array('id' => $portfolio->getId())))
            ->setMethod('DELETE')
            ->getForm()
    ;
  }

}
