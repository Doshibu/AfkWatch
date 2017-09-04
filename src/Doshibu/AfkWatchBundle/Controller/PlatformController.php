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

class PlatformController extends Controller
{
    public function indexAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$movieRepo = $em->getRepository('DoshibuAfkWatchBundle:Movie');
		$listMovie = $movieRepo->getAllWithGenres();
		$listPopular = $movieRepo->findMostPopular(35);

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'listMovie' 		=> $listMovie,
			'listPopular' 		=> $listPopular
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
			return $this->render('DoshibuAfkWatchBundle:Movie:index.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:index.html.twig', $viewParam);
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

		$nbPerPage = 10;
		$listMovie = $movieRepo->findByPrefix($prefix, $page, $nbPerPage);
		$count = count($listMovie);
		$nbPages = ceil($count/$nbPerPage);
		if ( $page > $nbPages )
		{
			if($page !== 1)
			{
				throw $this->createNotFoundException('La page '. $page .' n\'existe pas ou plus.');
			}
		}

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'prefix' 	=> $prefix,
			'page'		=> $page,
			'nbPages'	=> $nbPages,
			'count' 	=> $count,
			'listMovie' => $listMovie
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
			return $this->render('DoshibuAfkWatchBundle:Movie:list.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:list.html.twig', $viewParam);
	}

	public function faqAction(Request $request)
	{
		$questionRepo = $this->getDoctrine()
						->getManager()
						->getRepository('DoshibuAfkWatchBundle:Question');
		$listQuestion = $questionRepo->findAll();

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'listQuestion' 	=> $listQuestion
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
			return $this->render('DoshibuAfkWatchBundle:Movie:faq.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:faq.html.twig', $viewParam);
	}

	public function contactAction(Request $request)
	{
		$contact = new Contact();
		$form = $this->get('form.factory')->create(ContactType::class, $contact);

		if($form->handleRequest($request)->isValid())
		{
			$data = $form->getData();
			$mail = \Swift_Message::newInstance();
			$mail->setSubject('<AfkWatch> Message de la part de  '.$contact->getFirstName().' '.$contact->getLastName())
		        ->setFrom($contact->getEmail())
		        ->setTo('guiallaume.bonhommeau@gmail.com')
		        ->setBody($contact->getSubject().'."\n"'.$contact->getMessage());

        	$this->get('mailer')->send($mail);

			$request->getSession()->getFlashBag()->add('notice', 'ContactForm bien soumis.');
			return $this->redirect($this->generateUrl('doshibu_aw_contact'));
		}

		$newsletter = new Newsletter();
		$newsletterForm = $this->get('form.factory')->create(NewsletterType::class, $newsletter);

		$viewParam = array(
			'newsletterForm'	=> $newsletterForm->createView(),
			'form' => $form->createView()
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
			return $this->render('DoshibuAfkWatchBundle:Movie:contact.html.twig', $viewParam);
		}

		return $this->render('DoshibuAfkWatchBundle:Movie:contact.html.twig', $viewParam);
	}
}