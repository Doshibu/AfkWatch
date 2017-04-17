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

use Doshibu\AfkWatchBundle\Entity\Contact;
use Doshibu\AfkWatchBundle\Form\ContactType;

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

	public function movieAction(Request $request, $slug)
	{
		$em = $this->getDoctrine()->getManager();
		$movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');

		$movie = $movieRepo->findOneBy(array('slug' => $slug)); // joined full with genre & pays
		if($movie === null)
		{
			throw $this->createNotFoundException('Ce film n\'existe pas ou plus.');
		}

		$movieGenders = $movie->getGenders();
		$listPopular = $movieRepo->findMostPopularByGenres($movieGenders);

		$listProposedByGenre = $movieRepo->findMostPopularByGenre($movieGenders->first()->getSlug(), 3);
		$listProposedByPays = $movieRepo->findMostPopularByPays($movie->getCountries()->first()->getSlug(), 3);

		return $this->render('DoshibuAfkWatchBundle:Movie:movie.html.twig', array(
			'movie' 				=> $movie,
			'movieGenders'			=> $movieGenders,
			'listProposedByGenre' 	=> $listProposedByGenre,
			'listProposedByPays' 	=> $listProposedByPays,
			'listPopular' 			=> $listPopular
		));
	}

	public function genreAction(Request $request, $slug, $page=1)
	{
		$em = $this->getDoctrine()->getManager();
		$movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');
		$genreRepo = $em->getRepository('DoshibuAfkWatchBundle:Genre');

		$genre = $genreRepo->findOneBy(array('slug' => $slug));
		if($genre === null)
		{
			throw $this->createNotFoundException('Le genre demandé n\'existe pas ou plus.');
		}

		$nbPerPage = 24;
		$listMovie = $movieRepo->findByGenre($slug, $page, $nbPerPage);
		$nbPages = ceil(count($listMovie)/$nbPerPage);
		if ( $page > $nbPages )
		{
			if($page === 1)
			{
				throw $this->createNotFoundException('Malheureusement aucune donnée n\'est enregistré avec ce genre en référence.');
			}
			else
			{
				throw $this->createNotFoundException('La page '. $page .' n\'existe pas ou plus.');
			}
		}

		$listPopular = $movieRepo->findMostPopularByGenre($slug);

		return $this->render('DoshibuAfkWatchBundle:Movie:genre.html.twig', array(
			'genre'			=> $genre,
			'listMovie' 	=> $listMovie,
			'nbPages'		=> $nbPages,
			'page' 			=> $page,
			'listPopular'	=> $listPopular
		));
	}

	public function paysAction(Request $request, $slug, $page=1)
	{
		$em = $this->getDoctrine()->getManager();
		$movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');
		$paysRepo = $em->getRepository('DoshibuAfkWatchBundle:Pays');

		$pays = $paysRepo->findOneBy(array('slug' => $slug));
		if($pays === null)
		{
			throw $this->createNotFoundException('Le pays demandé n\'existe pas ou plus.');
		}

		$nbPerPage = 24;
		$listMovie = $movieRepo->findByPays($slug, $page, $nbPerPage);
		$nbPages = ceil(count($listMovie)/$nbPerPage);
		if ( $page > $nbPages )
		{
			if($page === 1)
			{
				throw $this->createNotFoundException('Malheureusement aucune donnée n\'est enregistré avec ce pays en référence.');
			}
			else
			{
				throw $this->createNotFoundException('La page '. $page .' n\'existe pas ou plus.');
			}
		}

		$listPopular = $movieRepo->findMostPopularByPays($slug);

		return $this->render('DoshibuAfkWatchBundle:Movie:pays.html.twig', array(
			'pays'			=> $pays,
			'listMovie' 	=> $listMovie,
			'nbPages'		=> $nbPages,
			'page' 			=> $page,
			'listPopular'	=> $listPopular
		));
	}

	public function seriesAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$serieRepo = $em->getRepository('DoshibuAfkWatchBundle:Serie');

		$listPopular = $serieRepo->findMostPopular();
		$listRated = $serieRepo->findMostRated();
		$listRecent = $serieRepo->findMostRecent();

		return $this->render('DoshibuAfkWatchBundle:Movie:series.html.twig', array(
			'listPopular'	=> $listPopular,
			'listRated'		=> $listRated,
			'listRecent' 	=> $listRecent
		));
	}

	public function serieAction(Request $request, $slug)
	{
		$em = $this->getDoctrine()->getManager();
		$serieRepo = $em->getRepository('DoshibuAfkWatchBundle:Serie');

		$serie = $serieRepo->findOneBy(array('slug' => $slug)); // joined full with genre & pays
		if($serie === null)
		{
			throw $this->createNotFoundException('Ce film n\'existe pas ou plus.');
		}

		$serieGenders = $serie->getGenders();
		$listPopular = $serieRepo->findMostPopularByGenres($serieGenders);

		$listProposedByGenre = $serieRepo->findMostPopularByGenre($serieGenders->first()->getSlug(), 3);
		$listProposedByPays = $serieRepo->findMostPopularByPays($serie->getCountries()->first()->getSlug(), 3);

		return $this->render('DoshibuAfkWatchBundle:Movie:serie.html.twig', array(
			'serie' 				=> $serie,
			'serieGenders'			=> $serieGenders,
			'listProposedByGenre' 	=> $listProposedByGenre,
			'listProposedByPays' 	=> $listProposedByPays,
			'listPopular' 			=> $listPopular
		));
	}

	public function newsAction(Request $request, $media, $page=1)
	{
		if ($media !== 'movie' && $media !== 'serie') 
		{
			throw $this->createNotFoundException('La page n\'existe pas ou plus.');
		}

		$em = $this->getDoctrine()->getManager();
		$newsRepo = $em->getRepository('DoshibuAfkWatchBundle:News');

		$nbPerPage = 24;
		$listNews = $newsRepo->findRecentsPage($media, $page, $nbPerPage, true);

		$nbPages = ceil(count($listNews)/$nbPerPage);
		if ( $page > $nbPages )
		{
			if($page === 1)
			{
				throw $this->createNotFoundException('Malheureusement aucune donnée n\'est enregistré avec ce pays en référence.');
			}
			else
			{
				throw $this->createNotFoundException('La page '. $page .' n\'existe pas ou plus.');
			}
		}

		$listMostViewed = $newsRepo->findMostViewed(15);
		$listMostRecent = $newsRepo->findMostRecent(5);

		return $this->render('DoshibuAfkWatchBundle:Movie:news.html.twig', array(
			'media'				=> $media,
			'listNews'			=> $listNews,
			'nbPages'			=> $nbPages,
			'page'				=> $page,
			'listMostViewed'	=> $listMostViewed,
			'listMostRecent'	=> $listMostRecent
		));
	}

	public function newsSingleAction(Request $request, $media, $slug)
	{
		$em = $this->getDoctrine()->getManager();
		$newsRepo = $em->getRepository('DoshibuAfkWatchBundle:News');

		$news = $newsRepo->findUnique($media, $slug); // joined full with genre & pays
		if($news === null)
		{
			throw $this->createNotFoundException('Cette page n\'existe pas ou plus.');
		}

		$newsMedia = $news->getMovie() !== null ? $news->getMovie() : $news->getSerie();
		$newsMediaGenders = $newsMedia->getGenders();

		$listPopular = $newsRepo->findMostViewedByGender($media, $newsMediaGenders, 15);
		$listRecent = $newsRepo->findMostRecentByGender($media, $newsMediaGenders, 5);

		return $this->render('DoshibuAfkWatchBundle:Movie:news-single.html.twig', array(
			'media' 		=> $media,
			'news' 			=> $news,
			'listPopular'	=> $listPopular,
			'listRecent'	=> $listRecent
		));
	}

	public function listAction(Request $request, $prefix, $page=1)
	{
		// === 'int' or One letter
		if($prefix !== 'int' && !(strlen($prefix) === 1 && ctype_alpha($prefix)))
		{
			throw $this->createNotFoundException('Cette page n\'existe pas ou plus.');
		}

		$movieRepo = $this->getDoctrine()
						->getManager()
						->getRepository('DoshibuAfkWatchBundle:Movie');

		$nbPerPage = 25;
		$listMovie = $movieRepo->findByPrefix($prefix, $page, $nbPerPage);
		$count = count($listMovie);
		$nbPages = ceil($count/$nbPerPage);
		if ( $page > $nbPages )
		{
			if($page === 1)
			{
				$msg = $prefix === 'int' ?
						'Malheureusement aucun nom de film ne commence par un chiffre.' :
						'Malheureusement aucun nom de film ne commence par la lettre "'. $prefix .'".';
				throw $this->createNotFoundException($msg);
			}
			else
			{
				throw $this->createNotFoundException('La page '. $page .' n\'existe pas ou plus.');
			}
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:list.html.twig', array(
			'count' 	=> $count,
			'listMovie' => $listMovie
		));
	}

	public function faqAction(Request $request)
	{
		$questionRepo = $this->getDoctrine()
						->getManager()
						->getRepository('DoshibuAfkWatchBundle:Question');
		$listQuestion = $questionRepo->findAll();

		return $this->render('DoshibuAfkWatchBundle:Movie:faq.html.twig', array(
			'listQuestion' 	=> $listQuestion
		));
	}

	public function contactAction(Request $request)
	{
		$contact = new Contact();
		$form = $this->get('form.factory')
				->create(ContactType::class, $contact);

		if($form->handleRequest($request)->isValid())
		{
			$data = $form->getData();
			$mail = \Swift_Message::newInstance();
			$mail->setSubject('<AfkWatch> Message de la part de  '.$request->request->get('firstName').' '.$request->request->get('lastName'))
		        ->setFrom($request->request->get('email'))
		        ->setTo('guiallaume.bonhommeau@gmail.com')
		        ->setBody($request->request->get('subject')."\n".$request->request->get('message'));

        	$this->get('mailer')->send($mail);

			$request->getSession()->getFlashBag()->add('notice', 'ContactForm bien soumis.');
			return $this->redirect($this->generateUrl('doshibu_aw_contact'));
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:contact.html.twig', array(
			'form' => $form->createView()
		));
	}

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