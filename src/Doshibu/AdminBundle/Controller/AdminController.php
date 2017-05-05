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

    public function mainMenuAction($activeMenu)
    {
        return $this->render('DoshibuAdminBundle:Admin:mainMenu.html.twig', array(
        	'activeMenu' 	=> $activeMenu
        ));
    }
}
