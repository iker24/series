<?php

namespace uni\Bundle\SeriesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\Bundle\SeriesBundle\Entity\premios;
use uni\Bundle\SeriesBundle\Form\premiosType;

/**
 * premios controller.
 *
 */
class premiosController extends Controller
{

    /**
     * Lists all premios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSeriesBundle:premios')->findAll();

        return $this->render('uniSeriesBundle:premios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new premios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new premios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('premios_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSeriesBundle:premios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a premios entity.
     *
     * @param premios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(premios $entity)
    {
        $form = $this->createForm(new premiosType(), $entity, array(
            'action' => $this->generateUrl('premios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new premios entity.
     *
     */
    public function newAction()
    {
        $entity = new premios();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSeriesBundle:premios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a premios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSeriesBundle:premios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find premios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSeriesBundle:premios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing premios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSeriesBundle:premios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find premios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSeriesBundle:premios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a premios entity.
    *
    * @param premios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(premios $entity)
    {
        $form = $this->createForm(new premiosType(), $entity, array(
            'action' => $this->generateUrl('premios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing premios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSeriesBundle:premios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find premios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('premios_edit', array('id' => $id)));
        }

        return $this->render('uniSeriesBundle:premios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a premios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSeriesBundle:premios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find premios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('premios'));
    }

    /**
     * Creates a form to delete a premios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('premios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
