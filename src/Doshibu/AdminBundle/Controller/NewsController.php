<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Doshibu\AfkWatchBundle\Entity\News;
use Doshibu\AfkWatchBundle\Form\NewsType;

class NewsController extends Controller
{
    public function addAction(Request $request)
    {
        $news = new News();
        $form = $this->get('form.factory')->create(NewsType::class, $news);

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            return $this->redirect($this->generateUrl('doshibu_admin_news_add'));
        }

        return $this->render('DoshibuAdminBundle:News:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function updateAction()
    {
        return $this->render('DoshibuAdminBundle:News:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('DoshibuAdminBundle:News:delete.html.twig');
    }
}
