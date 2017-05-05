<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('DoshibuAdminBundle:Admin:index.html.twig');
    }

	public function managementAction()
    {
        return $this->render('DoshibuAdminBundle:Admin:management.html.twig');
    }

    public function moviesAction()
    {
        return $this->render('DoshibuAdminBundle:Admin:movies.html.twig');
    }

    public function seriesAction()
    {
        return $this->render('DoshibuAdminBundle:Admin:series.html.twig');
    }

    public function newsAction()
    {
        return $this->render('DoshibuAdminBundle:Admin:news.html.twig');
    }

    public function moreAction()
    {
        return $this->render('DoshibuAdminBundle:Admin:more.html.twig');
    }

    public function mainMenuAction($activeMenu)
    {
        return $this->render('DoshibuAdminBundle:Admin:mainMenu.html.twig', array(
        	'activeMenu' 	=> $activeMenu
        ));
    }
}
