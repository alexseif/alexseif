<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Portofolio;
use AdminBundle\Form\PortofolioType;

/**
 * Portofolio controller.
 *
 * @Route("/portofolio")
 */
class PortofolioController extends Controller
{
    /**
     * Lists all Portofolio entities.
     *
     * @Route("/", name="portofolio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $portofolios = $em->getRepository('AdminBundle:Portofolio')->findAll();

        return $this->render('AdminBundle:Portofolio:index.html.twig', array(
            'portofolios' => $portofolios,
        ));
    }

    /**
     * Creates a new Portofolio entity.
     *
     * @Route("/new", name="portofolio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $portofolio = new Portofolio();
        $form = $this->createForm('AdminBundle\Form\PortofolioType', $portofolio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($portofolio);
            $em->flush();

            return $this->redirectToRoute('portofolio_show', array('id' => $portofolio->getId()));
        }

        return $this->render('AdminBundle:Portofolio:new.html.twig', array(
            'portofolio' => $portofolio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Portofolio entity.
     *
     * @Route("/{id}", name="portofolio_show")
     * @Method("GET")
     */
    public function showAction(Portofolio $portofolio)
    {
        $deleteForm = $this->createDeleteForm($portofolio);

        return $this->render('AdminBundle:Portofolio:show.html.twig', array(
            'portofolio' => $portofolio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Portofolio entity.
     *
     * @Route("/{id}/edit", name="portofolio_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Portofolio $portofolio)
    {
        $deleteForm = $this->createDeleteForm($portofolio);
        $editForm = $this->createForm('AdminBundle\Form\PortofolioType', $portofolio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($portofolio);
            $em->flush();

            return $this->redirectToRoute('portofolio_edit', array('id' => $portofolio->getId()));
        }

        return $this->render('AdminBundle:Portofolio:edit.html.twig', array(
            'portofolio' => $portofolio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Portofolio entity.
     *
     * @Route("/{id}", name="portofolio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Portofolio $portofolio)
    {
        $form = $this->createDeleteForm($portofolio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($portofolio);
            $em->flush();
        }

        return $this->redirectToRoute('portofolio_index');
    }

    /**
     * Creates a form to delete a Portofolio entity.
     *
     * @param Portofolio $portofolio The Portofolio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Portofolio $portofolio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('portofolio_delete', array('id' => $portofolio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
