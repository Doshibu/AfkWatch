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

class MovieController extends Controller
{
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

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'		=> $newsletterForm->createView(),
			'movie' 				=> $movie,
			'movieGenders'			=> $movieGenders,
			'listProposedByGenre' 	=> $listProposedByGenre,
			'listProposedByPays' 	=> $listProposedByPays,
			'listPopular' 			=> $listPopular
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
			return $this->render('DoshibuAfkWatchBundle:Movie:movie.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:movie.html.twig', $viewParam);
	}	
}