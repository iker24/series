<?php

namespace uni\Bundle\SeriesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\Bundle\SeriesBundle\Entity\series;
use uni\Bundle\SeriesBundle\Form\seriesType;

/**
 * series controller.
 *
 */
class seriesController extends Controller
{

    /**
     * Lists all series entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSeriesBundle:series')->findAll();

        return $this->render('uniSeriesBundle:series:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new series entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new series();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('series_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSeriesBundle:series:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a series entity.
     *
     * @param series $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(series $entity)
    {
        $form = $this->createForm(new seriesType(), $entity, array(
            'action' => $this->generateUrl('series_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new series entity.
     *
     */
    public function newAction()
    {
        $entity = new series();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSeriesBundle:series:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a series entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSeriesBundle:series')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find series entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSeriesBundle:series:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing series entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSeriesBundle:series')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find series entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSeriesBundle:series:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a series entity.
    *
    * @param series $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(series $entity)
    {
        $form = $this->createForm(new seriesType(), $entity, array(
            'action' => $this->generateUrl('series_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing series entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSeriesBundle:series')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find series entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('series_edit', array('id' => $id)));
        }

        return $this->render('uniSeriesBundle:series:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a series entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSeriesBundle:series')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find series entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('series'));
    }

    /**
     * Creates a form to delete a series entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('series_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
     public function __toString() {
     return $this->nombreCategorias;
}


public function buscarSeriesAction()
    {
        
        return $this->render('uniSeriesBundle:series:buscarSeries.html.twig');
    }

  

public function responderSeriesAction(Request $res)
    {
     //     $titulo= $_POST['titulo']; // Coger variables usando php clásico.
         $nombreSerie= $res->request->get('nombreSerie'); // Modo symfony2
         
      $em = $this->getDoctrine()->getEntityManager();
      
      $dql = "select n from uniSeriesBundle:series n where n.nombreSerie like :nombreSerie";
      $respuesta = $em->createQuery($dql);
      $respuesta->setParameter('nombreSerie',"%" . $nombreSerie . "%");
      $series = $respuesta->getResult();
     
      
        return $this->render('uniSeriesBundle:series:responderSeries.html.twig', array(
            'tabla' => $series,
            'nombreSerie'=> $nombreSerie,
            
        ));
    }
}
