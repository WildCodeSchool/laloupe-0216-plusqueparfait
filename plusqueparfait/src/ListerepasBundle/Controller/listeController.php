<?php

namespace ListerepasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ListerepasBundle\Entity\liste;
use ListerepasBundle\Form\listeType;

/**
 * liste controller.
 *
 */
class listeController extends Controller
{
    /**
     * Lists all liste entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listes = $em->getRepository('ListerepasBundle:liste')->findAll();

        return $this->render('liste/index.html.twig', array(
            'listes' => $listes,
        ));
    }

    /**
     * Creates a new liste entity.
     *
     */
    public function newAction(Request $request)
    {
        $liste = new liste();
        $form = $this->createForm('ListerepasBundle\Form\listeType', $liste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($liste);
            $em->flush();

            return $this->redirectToRoute('liste_show');
        }

        return $this->render('liste/new.html.twig', array(
            'liste' => $liste,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a liste entity.
     *
     */
    public function showAction(liste $liste)
    {
        $deleteForm = $this->createDeleteForm($liste);

        return $this->render('liste/show.html.twig', array(
            'liste' => $liste,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing liste entity.
     *
     */
    public function editAction(Request $request, liste $liste)
    {
        $deleteForm = $this->createDeleteForm($liste);
        $editForm = $this->createForm('ListerepasBundle\Form\listeType', $liste);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($liste);
            $em->flush();

            return $this->redirectToRoute('liste_edit', array('id' => $liste->getId()));
        }

        return $this->render('liste/edit.html.twig', array(
            'liste' => $liste,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a liste entity.
     *
     */
    public function deleteAction(Request $request, liste $liste)
    {
        $form = $this->createDeleteForm($liste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($liste);
            $em->flush();
        }

        return $this->redirectToRoute('liste_index');
    }

    /**
     * Creates a form to delete a liste entity.
     *
     * @param liste $liste The liste entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(liste $liste)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('liste_delete', array('id' => $liste->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
