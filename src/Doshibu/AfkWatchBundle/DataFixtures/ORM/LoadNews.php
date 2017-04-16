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
			'title' => 'Star Wars Battlefront 2 : la bande-annonce qui tue !',
			'tinyDescription' => 'Electronic Arts vient de dévoiler la toute première bande-annonce de son très attendu "Star Wars Battlefront 2".',
			'description' => "Tandis que la Star Wars Celebration bat son plein à Orlando, l'éditeur Electronic Arts a enfin lâché dans l'arène la toute première bande-annonce de son très attendu Star Wars Battlefront 2, dévoilé avec une date de sortie : le 17 novembre prochain. Le titre sera disponible sur PC, PS4 et Xbox One.\n
				Contrairement au précédent volet, cet opus, toujours développé par le studio suédois DICE, contiendra une campagne solo, qui manquait cruellement auparavant. Le jeu traversera aussi les époques, comme le montre les multiples personnages croisés dans ce somptueux Trailer, entre Rey, Kylo Ren, Dark Maul, Luke Skywalker, Yoda, etc. Le tout généreusement arrosé de combats spatiaux.\n
				Misère... L'attente va être douloureuse !"
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

		$serieRepo = $manager->getRepository('DoshibuAfkWatchBundle:Serie');
		$listSerie = $serieRepo->findAll();
		foreach ($listSerie as $serie) 
		{
			$news1 = new News();
			$news1->setTitle($defaultNews['title'])
				->setTinyDescription($defaultNews['tinyDescription'])
				->setDescription($defaultNews['description'])
				->setNbViews(mt_rand(1, 500000))
				->setSerie($serie);

			$news2 = new News();
			$news2->setTitle($defaultNews['title'])
				->setTinyDescription($defaultNews['tinyDescription'])
				->setDescription($defaultNews['description'])
				->setNbViews(mt_rand(1, 500000))
				->setSerie($serie);

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