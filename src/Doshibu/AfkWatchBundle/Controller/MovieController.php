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

	public function viewAction(Request $request)
	{

	}

	public function addAction(Request $request)
	{

	}

	public function editAction(Request $request)
	{

	}

	public function deleteAction(Request $request)
	{

	}
}