<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Doshibu\AfkWatchBundle\Entity\Serie;
use Doshibu\AfkWatchBundle\Form\SerieType;

class SeriesController extends Controller
{
    public function addAction(Request $request)
    {
        $serie = new Serie();
        $form = $this->get('form.factory')->create(SerieType::class, $serie);

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();
            return $this->redirect($this->generateUrl('doshibu_admin_series_add'));
        }

        return $this->render('DoshibuAdminBundle:Series:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    public function updateAction()
    {
        return $this->render('DoshibuAdminBundle:Series:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('DoshibuAdminBundle:Series:delete.html.twig');
    }
}
