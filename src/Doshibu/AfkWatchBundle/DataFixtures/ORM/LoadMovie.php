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
				'name' => 'Deadpool',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'rating' => 48,
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'rating' => 45,
				'imageLarge' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Interstellar',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'rating' => 45,
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Warrior',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'rating' => 37,
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Inglourious Basterds',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'rating' => 5,
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Deadpool',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'rating' => 48,
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'rating' => 45,
				'imageLarge' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Interstellar',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'rating' => 45,
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Warrior',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'rating' => 37,
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'country' => 'Etats-Unis'
			),
			array(
				'name' => 'Inglourious Basterds',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'rating' => 5,
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
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