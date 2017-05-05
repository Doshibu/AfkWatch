<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    public function addAction()
    {
        return $this->render('DoshibuAdminBundle:News:add.html.twig');
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
