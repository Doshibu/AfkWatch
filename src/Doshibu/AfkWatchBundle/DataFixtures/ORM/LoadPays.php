<?php

namespace Doshibu\AfkWatchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doshibu\AfkWatchBundle\Entity\Pays;

class LoadPays implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		// Liste des noms de catégorie à ajouter
		$names = array(
			'Allemagne',
			'Angleterre',
			'Argentine',
			'Brésil',
			'Chine',
			'Etats-Unis',
			'France',
			'Inde',
			'Indonésie',
			'Italie',
			'Japon',
			'Mexique',
			'Nigéria',
			'Philippines',
			'Royaume-Uni',
			'Russie',
			'Turquie'
			);

		foreach ($names as $name) 
		{
			// On crée la catégorie
			$pays = new Pays();
			$pays->setName($name);

			// On la persiste
			$manager->persist($pays);
		}

		// On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}

	public function getOrder()
    {
        return 2;
    }
}