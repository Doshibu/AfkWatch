<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Doshibu\AfkWatchBundle\Entity\Movie;
use Doshibu\AfkWatchBundle\Form\MovieType;
use Doshibu\AfkWatchBundle\Form\movie_preupdate;

class MoviesController extends Controller
{
    public function addAction(Request $request)
    {
        $movie = new Movie();
        $form = $this->get('form.factory')->create(MovieType::class, $movie);

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();
            return $this->redirect($this->generateUrl('doshibu_admin_movies_add'));
        }

        return $this->render('DoshibuAdminBundle:Movies:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function preupdateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');

        $form = $this->get('form.factory')->create(array('movies' => $movieRepo->findAll()));
        if($form->handleRequest($request)->isValid())
        {
            return $this->redirect($this->generateUrl('doshibu_admin_movies_update', array(
                'id' => $id
            )));
        }

        return $this->render('DoshibuAdminBundle:Movies:preupdate.html.twig');
    }

    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');
        $movie = $movieRepo->find($id);
        if ($movie == null) 
        {
            throw $this->createNotFoundException("Le film d'id ".$id." n'existe pas.");
        }

        $form = $this->get('form.factory')->create(MovieType::class, $movie);
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();
            return $this->redirect($this->generateUrl('doshibu_admin_movies_update', array(
                   'id' => $id
            )));
        }

        return $this->render('DoshibuAdminBundle:Movies:update.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction(Request $request)
    {
        return $this->render('DoshibuAdminBundle:Movies:delete.html.twig');
    }
}
