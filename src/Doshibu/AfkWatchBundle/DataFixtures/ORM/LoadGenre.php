<?php

namespace Doshibu\AfkWatchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doshibu\AfkWatchBundle\Entity\Genre;

class LoadGenre implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		// Liste des noms de catégorie à ajouter
		$names = array(
			'Action',
			'Aventure',
			'Animation',
			'Biographie',
			'Comédie',
			'Costume',
			'Crime',
			'Documentaire',
			'Drame',
			'Famille',
			'Fantastique',
			'Guerre',
			'Histoire',
			'Epouvante-Horreur',
			'Thriller',
			'Musique',
			'Psychologique',
			'Policier',
			'Romance',
			'Science Fiction',
			'Sports',
			'Western'
			);

		foreach ($names as $name) 
		{
	  		// On crée la catégorie
			$genre = new Genre();
			$genre->setName($name);

	  		// On la persiste
			$manager->persist($genre);
		}

		// On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}

	public function getOrder()
    {
        return 1;
    }
}