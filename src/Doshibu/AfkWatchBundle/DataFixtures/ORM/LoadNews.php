<?php

namespace Doshibu\AfkWatchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doshibu\AfkWatchBundle\Entity\News;

class LoadNews implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		// Liste des noms de catégorie à ajouter
		$defaultNews = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
			'tinyDescription' => 'Pellentesque vel urna accumsan, dictum sapien vitae, condimentum tellus.',
			'description' => 'Pellentesque vel urna accumsan, dictum sapien vitae, condimentum tellus. Nulla fermentum enim vitae commodo dapibus. Vivamus diam ligula, accumsan non malesuada et, interdum malesuada turpis. Donec posuere eros eget velit iaculis consequat. Vestibulum ante felis, congue a sapien pharetra, sodales congue magna. Curabitur id varius urna. Morbi finibus, velit sagittis fermentum venenatis, erat risus elementum nibh, at commodo lorem orci sed nulla. Pellentesque eu velit pulvinar, scelerisque lacus ut, semper dolor. Donec semper, nibh et lacinia sollicitudin, nibh dui pellentesque elit, eu placerat leo felis nec nunc. Sed bibendum pretium metus eget euismod. Mauris id lacus lacus. Praesent faucibus nunc eget turpis tristique molestie. Duis dui diam, tristique eu gravida ut, congue eget felis. Proin sapien ligula, volutpat ut ultrices sit amet, dignissim quis urna. Cras fermentum eu dolor in porttitor. Praesent sagittis sollicitudin scelerisque. Vivamus ac erat in ex consectetur imperdiet vel eget sapien. Duis viverra nisi id leo varius, vitae eleifend turpis vulputate. Mauris eget sagittis augue, ut efficitur mauris. Aenean risus nisi, faucibus eget condimentum at, porttitor vel felis. Aliquam eu augue ut tortor gravida iaculis in in orci. Quisque vehicula consectetur sagittis.' 
			);

		$movieRepo = $manager->getRepository('DoshibuAfkWatchBundle:Movie');
		$listMovie = $movieRepo->findAll();
		foreach ($listMovie as $movie) 
		{
			$news1 = new News();
			$news1->setTitle($defaultNews['title'])
				->setTinyDescription($defaultNews['tinyDescription'])
				->setDescription($defaultNews['description'])
				->setNbViews(mt_rand(1, 500000))
				->setMovie($movie);

			$news2 = new News();
			$news2->setTitle($defaultNews['title'])
				->setTinyDescription($defaultNews['tinyDescription'])
				->setDescription($defaultNews['description'])
				->setNbViews(mt_rand(1, 500000))
				->setMovie($movie);

			$manager->persist($news1);
			$manager->persist($news2);
		}

		// On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}

	public function getOrder()
    {
        return 5;
    }
}