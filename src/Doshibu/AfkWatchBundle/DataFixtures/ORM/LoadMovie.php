<?php

namespace Doshibu\AfkWatchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doshibu\AfkWatchBundle\Entity\Movie;
use Doshibu\AfkWatchBundle\Entity\Genre;
use Doshibu\AfkWatchBundle\Entity\Image;
use Doshibu\AfkWatchBundle\Entity\Pays;

class LoadMovie implements FixtureInterface, OrderedFixtureInterface
{
  	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		// Liste des films à ajouter
		//$listMovie = getListMovie();
		$listMovie = array(
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Deadpool',
				'tinyDescription' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire.',
				'description' => 'Deadpool, est l\'anti-héros le plus atypique de l\'univers Marvel. A l\'origine, il s\'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, Deadpool va traquer l\'homme qui a bien failli anéantir sa vie.',
				'filmMaker' => 'Tim Miller',
				'dateRelease' => array('year' => '2016', 'month' => '02', 'day' => '10'),
				'rating' => 48,
				'urlTrailer' => 'https://www.youtube.com/embed/XWtH7anz7io',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.hdwallpapers.in/walls/marvel_deadpool_movie-wide.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.breageeknews.fr/uploads/films/affiches/deadpool_116_1453219432_725.jpg', 'alt' => 'inter'),
				'genders' => array('Comédie', 'Action', 'Fantastique'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Lettres d\'Iwo Jima',
				'tinyDescription' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces homme.',
				'description' => 'En 1945, les armées américaine et japonaise s\'affrontèrent sur l\'île d\'Iwo Jima. Quelques décennies plus tard, des centaines de lettres furent extraites de cette terre aride, permettant enfin de donner un nom, un visage, une voix à ces hommes ainsi qu\'à leur extraordinaire commandant.
				Les soldats japonais qu\'on envoyait à Iwo Jima savaient que leurs chances de survie étaient quasi nulles. Animé d\'une volonté implacable, leur chef, le général Kuribayashi, exploita ingénieusement la nature du terrain, transformant ainsi la défaite éclair annoncée en 40 jours d\'héroïques combats.
				De nombreux soldats américains et japonais ont perdu la vie à Iwo Jima. Leur sang s\'est depuis longtemps perdu dans les profondeurs du sable noir, mais leurs sacrifices, leur courage et leur compassion ont survécu dans ces Lettres.',
				'filmMaker' => 'Client Eastwood',
				'dateRelease' => array('year' => '2007', 'month' => '02', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/51lo2dpaZ_g',
				'url' => '',
				'imageLarge' => array('url' => 'https://i.ytimg.com/vi/BIMMBhnKVj0/maxresdefault.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://www.ma-collection.com/images/dvd/266mc_affiche-Lettres-d-Iwo-Jima-Letters-from-Iwo-Jima-2006-9.jpg', 'alt' => 'iwo'),
				'genders' => array('Guerre'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Interstellar',
				'tinyDescription' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'description' => 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.',
				'filmMaker' => 'Christopher Nolan',
				'dateRelease' => array('year' => '2014', 'month' => '11', 'day' => '05'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/HsPP6xSzQoE',
				'url' => '',
				'imageLarge' => array('url' => 'http://www.wallpapermade.com/images/wallpapers/originals/interstellar-movie-scene-wallpaper-3326.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://papystreaming.com/fr/files/2014/11/Interstellar.jpeg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Warrior',
				'tinyDescription' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune.',
				'description' => 'Ancien Marine brisé, Tommy Conlon rentre au pays et demande à son père de le préparer pour un tournoi d’arts martiaux mixtes qui lui permettrait de gagner une fortune. Personne ne sait ce qu’il espère faire de cet argent. Le propre frère de Tommy, Brendan, décide lui aussi de s’engager dans la compétition pour essayer de sauver sa famille. Entre les deux frères, les années n’ont pas adouci les rancœurs.
				Immanquablement, les routes de Tommy et de Brendan vont bientôt se croiser. Au-delà de l’affrontement qui s’annonce, pour chacun, quelle que soit la cause qu’ils défendent, il n’est pas seulement question de remporter un prix, mais de mener le combat d’une vie… ',
				'filmMaker' => 'Gavin O\'Connor',
				'dateRelease' => array('year' => '2011', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/I5kzcwcQA1Q',
				'url' => '',
				'imageLarge' => array('url' => 'https://haryantosatria.files.wordpress.com/2015/06/warrior9.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/medias/nmedia/18/83/50/33/19794371.jpg', 'alt' => 'inter'),
				'genders' => array('Action', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Inglourious Basterds',
				'tinyDescription' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa.',
				'description' => 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma.
				Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis. "Les bâtards", nom sous lequel leurs ennemis vont apprendre à les connaître, se joignent à l\'actrice allemande et agent secret Bridget von Hammersmark pour tenter d\'éliminer les hauts dignitaires du Troisième Reich. Leurs destins vont se jouer à l\'entrée du cinéma où Shosanna est décidée à mettre à exécution une vengeance très personnelle...',
				'filmMaker' => 'Quentin Tarantino',
				'dateRelease' => array('year' => '2009', 'month' => '08', 'day' => '19'),
				'rating' => 5,
				'urlTrailer' => 'https://www.youtube.com/embed/j4o3a8r3i8g',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/249/thumb-1920-249742.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://cineclap.free.fr/inglourious-basterds/inglourious-basterds-a59.jpg?ks2ptg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Action'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Doctor Strange',
				'tinyDescription' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.',
				'description' => 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d\'aptitudes métaphysiques et d\'artefacts pour protéger le Marvel Cinematic Universe.',
				'filmMaker' => 'Scott Derrickson',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '26'),
				'rating' => 44,
				'urlTrailer' => ' https://www.youtube.com/embed/Lt-U_t2pUHI',
				'url' => '',
				'imageLarge' => array('url' => 'https://www.cineserie.com/wp-content/uploads/2016/08/283169.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://www.journaldugeek.com/wp-content/blogs.dir/1/files/2016/09/doctor-strange-affiche-francaise-finale.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Assassin\'s Creed',
				'tinyDescription' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.',
				'description' => 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.',
				'filmMaker' => 'Justin Kurzel',
				'dateRelease' => array('year' => '2016', 'month' => '12', 'day' => '21'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/4haJD6W136c',
				'url' => '',
				'imageLarge' => array('url' => 'http://assets2.ignimgs.com/2016/05/11/assassins-creed-film-header-1280jpg-685176_1280w.jpg', 'alt' => 'iwo'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/28/13/54/576646.jpg', 'alt' => 'iwo'),
				'genders' => array('Action', 'Science Fiction'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Les animaux fantastiques',
				'tinyDescription' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem déterminé à les anéantir.',
				'description' => 'New York, 1926. Le monde des sorciers est en grand danger. Une force mystérieuse sème le chaos dans les rues de la ville : la communauté des sorciers risque désormais d\'être à la merci des Fidèles de Salem, groupuscule fanatique des Non-Maj’ (version américaine du "Moldu") déterminé à les anéantir. Quant au redoutable sorcier Gellert Grindelwald, après avoir fait des ravages en Europe, il a disparu… et demeure introuvable.
				Ignorant tout de ce conflit qui couve, Norbert Dragonneau débarque à New York au terme d\'un périple à travers le monde : il a répertorié un bestiaire extraordinaire de créatures fantastiques dont certaines sont dissimulées dans les recoins magiques de sa sacoche en cuir – en apparence – banale. Mais quand Jacob Kowalski, Non-Maj’ qui ne se doute de rien, libère accidentellement quelques créatures dans les rues de la ville, la catastrophe est imminente. Il s\'agit d\'une violation manifeste du Code International du Secret Magique dont se saisit l\'ancienne Auror Tina Goldstein pour récupérer son poste d\'enquêtrice. Et la situation s\'aggrave encore lorsque Percival Graves, énigmatique directeur de la Sécurité du MACUSA (Congrès Magique des États-Unis d\'Amérique), se met à soupçonner Norbert… et Tina.
				Norbert, Tina et sa sœur Queenie, accompagnés de leur nouvel ami Non-Maj’ Jacob, unissent leurs forces pour retrouver les créatures disséminées dans la nature avant qu\'il ne leur arrive malheur. Mais nos quatre héros involontaires, dorénavant considérés comme fugitifs, doivent surmonter des obstacles bien plus importants qu’ils n’ont jamais imaginé. Car ils s\'apprêtent à affronter des forces des ténèbres qui risquent bien de déclencher une guerre entre les Non-Maj’ et le monde des sorciers.',
				'filmMaker' => 'David Yates',
				'dateRelease' => array('year' => '2016', 'month' => '11', 'day' => '16'),
				'rating' => 45,
				'urlTrailer' => 'https://www.youtube.com/embed/jC8xuFcMq20',
				'url' => '',
				'imageLarge' => array('url' => 'https://i2.wp.com/smallthings.fr/wp-content/uploads/2016/11/IMG_2448.jpg?fit=1920%2C1080', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img3.acsta.net/pictures/16/10/11/09/32/205295.jpg', 'alt' => 'inter'),
				'genders' => array('Fantastique', 'Aventure'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'Free State Of Jones',
				'tinyDescription' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés.',
				'description' => 'En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d’un groupe de modestes paysans blancs et d\'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l\'avantage stratégique de connaître le terrain, même si leurs ennemis sont bien plus nombreux et beaucoup mieux armés… Résolument engagé contre l\'injustice et l\'exploitation humaine, l\'intrépide fermier fonde le premier État d\'hommes libres où Noirs et Blancs sont à égalité.  ',
				'filmMaker' => 'Gary Ross',
				'dateRelease' => array('year' => '2016', 'month' => '09', 'day' => '14'),
				'rating' => 37,
				'urlTrailer' => 'https://www.youtube.com/embed/3EMkxEKKSQI',
				'url' => '',
				'imageLarge' => array('url' => 'http://culturebox.francetvinfo.fr/sites/default/files/assets/images/2016/09/free_state_of_jones_a.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'http://fr.web.img2.acsta.net/r_1280_720/pictures/16/08/12/10/07/279399.jpg', 'alt' => 'inter'),
				'genders' => array('Guerre', 'Biographie', 'Drame'),
				'countries' => array('Etats-Unis')
			),
			array(
				'name' => 'La Stratégie Ender',
				'tinyDescription' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu.',
				'description' => 'Dans un futur proche, une espèce extraterrestre hostile, les Doryphores, ont attaqué la Terre. Sans l’héroïsme de Mazer Rackham, le commandant de la Flotte Internationale, le combat aurait été perdu. Depuis, le très respecté colonel Graff et les forces militaires terriennes entraînent les meilleurs jeunes esprits pour former des officiers émérites et découvrir dans leurs rangs celui qui pourra contrer la prochaine attaque. Ender Wiggin, un garçon timide mais doté d’une exceptionnelle intelligence tactique, est sélectionné pour rejoindre l’élite. A l’académie, Ender apprend rapidement à maîtriser des manoeuvres militaires de plus en plus difficiles où son sens de la stratégie fait merveille. Graff ne tarde pas à le considérer comme le meilleur élément et le plus grand espoir de l’humanité. Il ne lui manque plus qu’à être formé par Mazer Rackham lui-même, pour pouvoir commander la Flotte lors d’une bataille homérique qui décidera du sort de la Terre.',
				'filmMaker' => 'Gavin Hood',
				'dateRelease' => array('year' => '2013', 'month' => '11', 'day' => '06'),
				'rating' => 38,
				'urlTrailer' => 'https://www.youtube.com/embed/rNnu9FIHG54',
				'url' => '',
				'imageLarge' => array('url' => 'https://images2.alphacoders.com/436/436575.jpg', 'alt' => 'inter'),
				'imageSmall' => array('url' => 'https://s-media-cache-ak0.pinimg.com/originals/f8/29/1a/f8291a473215faed4eda35629d1eee17.jpg', 'alt' => 'inter'),
				'genders' => array('Science Fiction', 'Action'),
				'countries' => array('Etats-Unis')
			)
		);

		$genreRepo = $manager->getRepository('DoshibuAfkWatchBundle:Genre');
		$imageRepo = $manager->getRepository('DoshibuAfkWatchBundle:Image');
		$paysRepo = $manager->getRepository('DoshibuAfkWatchBundle:Pays');

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
						->setTinyDescription($movie['tinyDescription'])
						->setDescription($movie['description'])
						->setFilmMaker($movie['filmMaker'])
						->setDateRelease(new \DateTime($movie['dateRelease']['year'].'-'.$movie['dateRelease']['month'].'-'.$movie['dateRelease']['day']))
						->setRating(mt_rand(10, 50))
						->setUrlTrailer($movie['urlTrailer'])
						->setUrl($movie['url'])
						->setNbViews(mt_rand(1, 500000))
						->setImageLarge($imageLarge)
						->setImageSmall($imageSmall);
			$manager->persist($movieEntity);

			foreach ($movie['genders'] as $genre) 
			{
				$genreEntity = $genreRepo->findOneBy(array('name' => $genre));
				$genreEntity->addMovie($movieEntity);
				$movieEntity->addGender($genreEntity);

				$manager->persist($genreEntity);
				$manager->persist($movieEntity);
			}

			foreach ($movie['countries'] as $pays) 
			{
				$paysEntity = $paysRepo->findOneBy(array('name' => $pays));
				$paysEntity->addMovie($movieEntity);
				$movieEntity->addCountry($paysEntity);

				$manager->persist($paysEntity);
				$manager->persist($movieEntity);
			}
		}

		// On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}

	public function getOrder()
    {
        return 3;
    }
}