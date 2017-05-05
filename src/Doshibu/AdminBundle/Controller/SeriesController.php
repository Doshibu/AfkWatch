<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SeriesController extends Controller
{
    public function addAction()
    {
        return $this->render('DoshibuAdminBundle:Series:add.html.twig');
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
