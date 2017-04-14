<?php

namespace Doshibu\AfkWatchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doshibu\AfkWatchBundle\Entity\Question;

class LoadQuestion implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		// Liste des noms de catégorie à ajouter
		$questions = array(
					'Ai-je le droit de regarder un film ou une série en streaming, sur Internet ?' 
					=> 
						'Ça dépend. Si l\'œuvre a été mise en ligne avec l\'accord du ou des ayants droit (auteur, producteur, studio), dans le respect du code de la propriété intellectuelle, pas de problème. Sinon, c\'est illégal. Il s\'agit d\'une contrefaçon.',
					'Pourquoi ?' 
					=> 
						'Avant l\'adoption des lois Hadopi, la personne qui visionnait sur son ordinateur se rendait coupable de contrefaçon, voire de « recel de contrefaçon ». Par « recel » on veut dire qu\'elle tire bénéfice d\'un délit commis par le diffuseur. Depuis l\'adoption des lois Hadopi, elle peut également être condamnée à la peine complémentaire de suspension de son accès à Internet. Et aussi à la contravention de « négligence caractérisée » dans son obligation de veiller au bon usage de son accès à Internet.',
					'Quels sont les risques pénaux pour cet utilisateur ?' 
					=> 
						'En théorie, pour la contrefaçon, trois ans de prison et 300 000 € d\'amende. Pour le recel, cinq ans de prison et 375 000 € d\'amende. Et pour l\'infraction de « négligence caractérisée » : contravention de 5e classe, soit une amende de 1 500 € ; 3 000 € en cas de récidive.',
					'Comment savoir si le site de streaming que je fréquente est légal ou illégal ?' 
					=> 
						'Il faut vérifier sur le site s\'il y a une information à ce sujet, si les exploitants du site sont identifiés, s\'il existe des conditions d\'utilisation, des mentions légales. À défaut, il s\'agira sans doute d\'un site illégal.',
					'La loi Hadopi couvre donc aussi bien le téléchargement illégal que le streaming ?' 
					=> 
						'Théoriquement, oui. La loi n\'utilise ni le terme « téléchargement » ni celui de « streaming » mais évoque la « représentation et la reproduction sans autorisation de l\'auteur ». Formule qui couvre toutes les formes de diffusion sur le Net. Donc, une personne visionnant en streaming peut tout à fait recevoir les avertissements de la Hadopi (Haute Autorité pour la diffusion des oeuvres et la protection des droits sur Internet) lui demandant de cesser. Si elle continue, la Hadopi pourrait demander au fournisseur d\'accès de suspendre l\'abonnement Internet puis transmettre le cas au procureur de la République. Celui-ci pourrait lancer des poursuites. Ces démarches sont possibles car, même en streaming, l\'adresse IP de l\'ordinateur qui reçoit les données peut être connue.',
					'Avez-vous eu connaissance de décisions de justice concernant des utilisateurs illégaux de streaming ?' 
					=> 
						'Non. Les ayants droit ou leurs représentants visent les sites des diffuseurs, préférant remonter à la source plutôt que vers de trop nombreux internautes. Ceux-ci seraient plutôt du ressort de la Hadopi.'
				);

		foreach ($questions as $key => $value) 
		{
	  		// On crée la catégorie
			$question = new Question();
			$question->setQuestion($key)
				->setAnswer($value);
			
			$manager->persist($question);
		}

		// On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}

	public function getOrder()
    {
        return 6;
    }
}