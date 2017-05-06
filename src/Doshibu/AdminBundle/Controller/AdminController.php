<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('DoshibuAdminBundle:Admin:index.html.twig');
    }

	public function managementAction(Request $request)
    {
        return $this->render('DoshibuAdminBundle:Admin:management.html.twig');
    }
    
    public function moreAction(Request $request)
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
