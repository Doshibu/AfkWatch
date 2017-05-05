<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MoviesController extends Controller
{
    public function addAction()
    {
        return $this->render('DoshibuAdminBundle:Movies:add.html.twig');
    }

    public function updateAction()
    {
        return $this->render('DoshibuAdminBundle:Movies:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('DoshibuAdminBundle:Movies:delete.html.twig');
    }
}
