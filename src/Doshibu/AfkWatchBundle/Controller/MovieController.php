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
		$movieRepo = $this->getDoctrine()
						->getManager()
						->getRepository('DoshibuAfkWatchBundle:Movie');
		$listMovie = $movieRepo->getAllWithGenres();
		$listPopular = $movieRepo->findMostPopular(35);

		return $this->render('DoshibuAfkWatchBundle:Movie:index.html.twig', array(
			'listMovie' 	=> $listMovie,
			'listPopular' 	=> $listPopular
		));
	}

	public function singleAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:single.html.twig');
	}

	public function genreAction(Request $request, $slug, $page=1)
	{
		$movieRepo = $this->getDoctrine()
						->getManager()
						->getRepository('DoshibuAfkWatchBundle:Movie');

		$nbPerPage = 24;
		$listMovie = $movieRepo->findByGenre($slug, $page, $nbPerPage);
		$nbPages = ceil(count($listMovie)/$nbPerPage);

		if ( $page > $nbPages )
		{
			throw $this->createNotFoundException('La page '. $page .' n\'existe pas.');
		}

		$listPopular = $movieRepo->findMostPopularByGenre($slug);

		return $this->render('DoshibuAfkWatchBundle:Movie:genre.html.twig', array(
			'listMovie' 	=> $listMovie,
			'listPopular'	=> $listPopular,
			'nbPages'		=> $nbPages,
			'page' 			=> $page,
			'slug'			=> $slug
		));
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

	public function paysAction(Request $request, $slug, $page=1)
	{
		$movieRepo = $this->getDoctrine()
						->getManager()
						->getRepository('DoshibuAfkWatchBundle:Movie');

		$nbPerPage = 24;
		$listMovie = $movieRepo->findByPays($slug, $page, $nbPerPage);
		$nbPages = ceil(count($listMovie)/$nbPerPage);

		if ( $page > $nbPages )
		{
			throw $this->createNotFoundException('La page '. $page .' n\'existe pas.');
		}

		$listPopular = $movieRepo->findMostPopularByPays($slug);

		return $this->render('DoshibuAfkWatchBundle:Movie:pays.html.twig', array(
			'listMovie' 	=> $listMovie,
			'listPopular'	=> $listPopular,
			'nbPages'		=> $nbPages,
			'page' 			=> $page,
			'slug'			=> $slug
		));
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
			'listGenre' => $listGenre,
			'listPays' 	=> $listPays
		));
	}

	public function blockStarAction($rating)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:blockStar.html.twig', array(
			'rating' => $rating
		));
	}
}