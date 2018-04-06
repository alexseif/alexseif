<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Career;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Career controller.
 *
 * @Route("/admin/career")
 */
class CareerController extends Controller
{
    /**
     * Lists all career entities.
     *
     * @Route("/", name="admin_career_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $careers = $em->getRepository('AppBundle:Career')->findAll();

        return $this->render('admin/career/index.html.twig', array(
            'careers' => $careers,
        ));
    }

    /**
     * Creates a new career entity.
     *
     * @Route("/new", name="admin_career_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $career = new Career();
        $form = $this->createForm('AppBundle\Form\CareerType', $career);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($career);
            $em->flush();

            return $this->redirectToRoute('admin_career_show', array('id' => $career->getId()));
        }

        return $this->render('admin/career/new.html.twig', array(
            'career' => $career,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a career entity.
     *
     * @Route("/{id}", name="admin_career_show")
     * @Method("GET")
     */
    public function showAction(Career $career)
    {
        $deleteForm = $this->createDeleteForm($career);

        return $this->render('admin/career/show.html.twig', array(
            'career' => $career,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing career entity.
     *
     * @Route("/{id}/edit", name="admin_career_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Career $career)
    {
        $deleteForm = $this->createDeleteForm($career);
        $editForm = $this->createForm('AppBundle\Form\CareerType', $career);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_career_edit', array('id' => $career->getId()));
        }

        return $this->render('admin/career/edit.html.twig', array(
            'career' => $career,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a career entity.
     *
     * @Route("/{id}", name="admin_career_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Career $career)
    {
        $form = $this->createDeleteForm($career);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($career);
            $em->flush();
        }

        return $this->redirectToRoute('admin_career_index');
    }

    /**
     * Creates a form to delete a career entity.
     *
     * @param Career $career The career entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Career $career)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_career_delete', array('id' => $career->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
