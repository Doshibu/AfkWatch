<?php

namespace Doshibu\AfkWatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;

use Doshibu\AfkWatchBundle\Entity\Genre;
use Doshibu\AfkWatchBundle\Entity\Image;
use Doshibu\AfkWatchBundle\Entity\Movie;
use Doshibu\AfkWatchBundle\Entity\News;
use Doshibu\AfkWatchBundle\Entity\Pays;
use Doshibu\AfkWatchBundle\Entity\Serie;

use Doshibu\AfkWatchBundle\Entity\Newsletter;
use Doshibu\AfkWatchBundle\Form\NewsletterType;
use Doshibu\AfkWatchBundle\Entity\Contact;
use Doshibu\AfkWatchBundle\Form\ContactType;

class UserControlController extends Controller
{
    public function mainMenuAction($activeMenu)
	{
		$em = $this->getDoctrine()->getManager();

		$listGenre = array();
		$listGenre[0] = array(); $listGenre[1] = array(); $listGenre[2] = array();
		$genres = $em
			->getRepository('DoshibuAfkWatchBundle:Genre')
			->getAll();

		$listPays = array();
		$listPays[0] = array(); $listPays[1] = array(); $listPays[2] = array();
		$pays = $em
			->getRepository('DoshibuAfkWatchBundle:Pays')
			->getAll();

		// Prepare data column thanks to 3 list of "Genres" & "Pays" menu
		for($a=0; $a<3; $a++)
		{
			for($i=$a; $i<count($genres); $i+=3)
			{
				if($genres[$i] !== null)
				{
					array_push($listGenre[$a], $genres[$i]);
				}
			}

			for($i=$a; $i<count($pays); $i+=3)
			{
				if($pays[$i] !== null)
				{
					array_push($listPays[$a], $pays[$i]);
				}
			}
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:mainMenu.html.twig', array(
			'activeMenu' 	=> $activeMenu,
			'listGenre' 	=> $listGenre,
			'listPays' 		=> $listPays
		));
	}

	public function blockStarAction($rating, $agileTv = false)
	{
		$arrayReturn = array(
			'rating' => $rating
		);

		if($agileTv === true) 
		{
			$arrayReturn['agileTv'] = true;
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:blockStar.html.twig', $arrayReturn);
	}
    }