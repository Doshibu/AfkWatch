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
use Doshibu\AfkWatchBundle\Entity\Series;

class MovieController extends Controller
{
	public function indexAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:index.html.twig');
	}

	public function singleAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:single.html.twig');
	}

	public function genreAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:genre.html.twig');
	}

	public function seriesAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:series.html.twig');
	}

	public function newsAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:news.html.twig');
	}

	public function newsSingleAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:newsSingle.html.twig');
	}

	public function paysAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:pays.html.twig');
	}

	public function listAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:list.html.twig');
	}

	public function faqAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:faq.html.twig');
	}

	public function contactAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:contact.html.twig');
	}

	public function mainMenuAction()
	{
		$em = $this->getDoctrine()->getManager();

		$listGenre = array();
		$listGenre[0] = array(); $listGenre[1] = array(); $listGenre[2] = array();
		$genres = $em
			->getRepository('DoshibuAfkWatchBundle:Genre')
			->findAllAsArray();

		$listPays = array();
		$listPays[0] = array(); $listPays[1] = array(); $listPays[2] = array();
		$pays = $em
			->getRepository('DoshibuAfkWatchBundle:Pays')
			->findAllAsArray();

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
			'listGenre' => $listGenre,
			'listPays' 	=> $listPays
			));
	}
}