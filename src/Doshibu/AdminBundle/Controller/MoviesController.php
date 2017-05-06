<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Doshibu\AfkWatchBundle\Entity\Movie;
use Doshibu\AfkWatchBundle\Form\MovieType;

class MoviesController extends Controller
{
    public function addAction(Request $request)
    {
        $movie = new Movie();
        $form = $this->get('form.factory')->create(MovieType::class, $movie);

        if($form->handleRequest($request)->isValid())
        {
            return $this->redirect($this->generateUrl('doshibu_admin_movies_add'));
        }

        return $this->render('DoshibuAdminBundle:Movies:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function updateAction(Request $request)
    {
        return $this->render('DoshibuAdminBundle:Movies:update.html.twig');
    }

    public function deleteAction(Request $request)
    {
        return $this->render('DoshibuAdminBundle:Movies:delete.html.twig');
    }
}
