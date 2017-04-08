<?php

namespace Doshibu\AfkWatchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doshibu\AfkWatchBundle\Entity\Movie;
use Doshibu\AfkWatchBundle\Entity\Genre;
use Doshibu\AfkWatchBundle\Entity\Image;
use Doshibu\AfkWatchBundle\Entity\Pays;

class LoadMovie implements FixtureInterface
{
  	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		$genreRepo = $manager->getRepository('DoshibuAfkWatchBundle:Genre');
		$imageRepo = $manager->getRepository('DoshibuAfkWatchBundle:Image');
		$paysRepo = $manager->getRepository('DoshibuAfkWatchBundle:Pays');

		// Liste des noms de catégorie à ajouter
		$listMovie = array(
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'rating' => 45,
				'imageLarge' => array('url' => 'http://fr.web.img4.acsta.net/c_215_290/medias/nmedia/18/63/30/19/18721539.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img4.acsta.net/c_215_290/medias/nmedia/18/63/30/19/18721539.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Interstellar',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'rating' => 45,
				'imageLarge' => array('url' => 'http://fr.web.img2.acsta.net/c_215_290/pictures/14/09/24/12/08/158828.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/c_215_290/pictures/14/09/24/12/08/158828.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'country' => 'Etats-Unis'
			)
		);

		foreach($listMovie as $movie)
		{
			$imageLarge = new Image();
			$imageLarge->setUrl($movie['imageLarge']['url'])
					->setAlt($movie['imageLarge']['alt']);
			$imageSmall = new Image();
			$imageSmall->setUrl($movie['imageSmall']['url'])
					->setAlt($movie['imageSmall']['alt']);
			$manager->persist($imageLarge);
			$manager->persist($imageSmall);

			$movieEntity = new Movie();
			$movieEntity->setName($movie['name'])
						->setDescription($movie['description'])
						->setFilmMaker($movie['filmMaker'])
						->setRating($movie['rating'])
						->setImageLarge($imageLarge)
						->setImageSmall($imageSmall);
			$manager->persist($movieEntity);

			/*foreach ($movie['genders'] as $genre) 
			{
				$genreEntity = $genreRepo->findOneBy(array('name' => $genre));
				$genreEntity->addMovie($movieEntity);
				$movieEntity->addGender($genreEntity);

				$manager->persist($genreEntity);
				$manager->persist($movieEntity);
			}*/

			/*$paysEntity = $paysRepo->findOneBy(array('name' => $movie['country']));
			$paysEntity->addMovie($movieEntity);
			$manager->persist($paysEntity);*/
		}

		// On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}
}