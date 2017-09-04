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

class SerieController extends Controller
{
    public function seriesAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$serieRepo = $em->getRepository('DoshibuAfkWatchBundle:Serie');

		$listPopular = $serieRepo->findMostPopular();
		$listRated = $serieRepo->findMostRated();
		$listRecent = $serieRepo->findMostRecent();

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'listPopular'	=> $listPopular,
			'listRated'		=> $listRated,
			'listRecent' 	=> $listRecent
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
			return $this->render('DoshibuAfkWatchBundle:Movie:series.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:series.html.twig', $viewParam);
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

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'serie' 				=> $serie,
			'serieGenders'			=> $serieGenders,
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
			return $this->render('DoshibuAfkWatchBundle:Movie:serie.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:serie.html.twig', $viewParam);
	}
}