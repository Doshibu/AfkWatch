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

class GenderController extends Controller
{
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

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'genre'			=> $genre,
			'listMovie' 	=> $listMovie,
			'nbPages'		=> $nbPages,
			'page' 			=> $page,
			'listPopular'	=> $listPopular
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
			return $this->render('DoshibuAfkWatchBundle:Movie:genre.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:genre.html.twig', $viewParam);
	}
}