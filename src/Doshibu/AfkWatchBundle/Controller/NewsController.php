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

class NewsController extends Controller 
{
    public function newsAction(Request $request, $media, $page=1)
	{
		if ($media !== 'movie' && $media !== 'serie') 
		{
			throw $this->createNotFoundException('La page n\'existe pas ou plus.');
		}

		$em = $this->getDoctrine()->getManager();
		$newsRepo = $em->getRepository('DoshibuAfkWatchBundle:News');

		$nbPerPage = 16;
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

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'media'				=> $media,
			'listNews'			=> $listNews,
			'nbPages'			=> $nbPages,
			'page'				=> $page,
			'listMostViewed'	=> $listMostViewed,
			'listMostRecent'	=> $listMostRecent
		);
		
		if($newsletterForm->handleRequest($request)->isValid())
		{
			$data = $newsletterForm->getData();
			$newsletterRepo = $em->getRepository('DoshibuAfkWatchBundle:Newsletter');
			$isKnown = null !== $newsletterRepo->findOneByEmail($newsletter->getEmail());

			$alert = array('class' => '', 'message' => '');
			if($isKnown)
			{
				$alert['class'] = 'warning';
				$alert['message'] = 'Cette adresse email a déjà été renseignée.';	
			}
			else
			{
		    	$em->persist($newsletter);
		    	$em->flush();

				$alert['class'] = 'success';
				$alert['message'] = 'Votre adresse mail a bien été renseignée. Vous serez avertis des dernières nouveautés.';	
			}

			$viewParam['alert'] = $alert;
			return $this->render('DoshibuAfkWatchBundle:Movie:news.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:news.html.twig', $viewParam);
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

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'media' 		=> $media,
			'news' 			=> $news,
			'listPopular'	=> $listPopular,
			'listRecent'	=> $listRecent
		);
		
		if($newsletterForm->handleRequest($request)->isValid())
		{
			$data = $newsletterForm->getData();
			$newsletterRepo = $em->getRepository('DoshibuAfkWatchBundle:Newsletter');
			$isKnown = null !== $newsletterRepo->findOneByEmail($newsletter->getEmail());

			$alert = array('class' => '', 'message' => '');
			if($isKnown)
			{
				$alert['class'] = 'warning';
				$alert['message'] = 'Cette adresse email a déjà été renseignée.';	
			}
			else
			{
		    	$em->persist($newsletter);
		    	$em->flush();

				$alert['class'] = 'success';
				$alert['message'] = 'Votre adresse mail a bien été renseignée. Vous serez avertis des dernières nouveautés.';	
			}

			$viewParam['alert'] = $alert;
			return $this->render('DoshibuAfkWatchBundle:Movie:news-single.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:news-single.html.twig', $viewParam);
	}
}