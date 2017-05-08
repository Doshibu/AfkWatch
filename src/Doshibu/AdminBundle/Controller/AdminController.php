<?php

namespace Doshibu\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');
        $serieRepo = $em->getRepository('DoshibuAfkWatchBundle:Serie');
        $newsRepo = $em->getRepository('DoshibuAfkWatchBundle:News');

        $countFilm = array(); $countSerie = array(); $countNews = array();
        $countFilm[0] = $movieRepo->countByMonth(new \DateTime('first day of this month'), new \DateTime());
        $countSerie[0] = $serieRepo->countByMonth(new \DateTime('first day of this month'), new \DateTime());
        $countNews[0] = $newsRepo->countByMonth(new \DateTime('first day of this month'), new \DateTime());

        $from = new \DateTime("first day of last month");
        $to = new \DateTime("last day of last month");
        for($i=1; $i<=4; $i++)
        {       
            if($i > 1) {
                $from->modify('first day of last month');
                $to->modify('last day of last month');
            }
            $countFilm[$i] = $movieRepo->countByMonth($from, $to);
            $countSerie[$i] = $serieRepo->countByMonth($from, $to);
            $countNews[$i] = $newsRepo->countByMonth($from, $to);
        }

        return $this->render('DoshibuAdminBundle:Admin:index.html.twig', array(
            'countFilm'     => $countFilm,
            'countSerie'    => $countSerie,
            'countNews'     => $countNews
        ));
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
