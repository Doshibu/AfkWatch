<?php

namespace Doshibu\AfkWatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DoshibuAfkWatchBundle:Default:index.html.twig');
    }
}
