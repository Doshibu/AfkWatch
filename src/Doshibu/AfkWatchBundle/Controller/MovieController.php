<?php

namespace Doshibu\AfkWatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
	public function indexAction(Request $request)
	{
		return $this->render('DoshibuAfkWatchBundle:Movie:index.html.twig');
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
}