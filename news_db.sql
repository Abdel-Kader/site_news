-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 24 juin 2019 à 01:38
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `news_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datePub` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  `idCat` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `titre`, `description`, `datePub`, `image`, `idCat`, `iduser`) VALUES
(1, 'Iran: «Un doigt sur la gâchette», Donald Trump fait volte-face  ', 'Le président des États-Unis a renoncé jeudi à lancer des frappes prévues contre des cibles iraniennes après la destruction par Téhéran d’un drone militaire américain dans le détroit d’Ormuz.\r\n\r\nUne poigne de fer, dans un gant de velours. Donald Trump balbutie fréquemment sa communication de crise, mais il pense cette fois avoir trouvé la bonne carburation pour imprimer son image d’homme fort et magnanime à la face du monde: oui, assurent de généreuses sources officielles anonymes, des frappes étaient prévues jeudi soir autour de 20 heures (heure de Washington) contre des sites de missiles sol-air et de radars iraniens, dans le détroit d’Ormuz, non loin de là où un drone américain non-armé fut abattu le matin même.', '2019-06-20 00:00:00', '201906201145.jpg', 3, 1),
(2, 'Suspicions de fuites sur des sujets de mathématiques du bac : des lycéens témoignent', 'C\'est l\'incompréhension ce vendredi après des soupçons de fuites des sujets de mathématiques du Bac ES. Le ministère de l\'Education nationale tient une conférence de presse et annonce porter plainte. Pour l\'heure, environ quatre établissements de l\'Ile-de-France sont concernés. \r\n\r\nLes réseaux sociaux s\'enflamment depuis la fin du Bac de mathématiques, d\'abord à cause de nombreuses fautes, puis à cause de rumeurs de fuites. Dès jeudi soir, le sujet aurait circulé sur les réseaux sociaux. Mais également ce matin à 7h, avant le début de l\'épreuve. Des candidats ont confirmé à BFMTV avoir vu ces fameux sujets avant le début de l\'épreuve.\r\n\r\nL\'une des lycéennes en terminale ES, scolarisée dans le Val-de-Marne nous confie : \" Ce matin à 6h j\'ai vu de mes propres yeux le sujet dans mon groupe de classe, pensant que c\'était faux, personne n\'a vraiment regardé mais c\'était bien ça\". L\'élève affirme avoir vu le sujet circuler dans une conversation Snapchat et ensuite sur Twitter. \r\n', '2008-06-02 00:00:00', '20190620166.jpg', 2, 1),
(3, 'Nokia 9 PureView: On l\'a testé avec ses cinq capteurs et son traitement photo trop lent', '\r\n    Curiosité au salon Mobile World Congress de Barcelone en février 2019, le Nokia 9 Pure View est désormais dans les bacs et vendu 699 euros.\r\n    Jouant comme d’autres la carte «photo», ce smartphone au design très réussit affiche cinq capteurs arrière.\r\n    Mais à l’essai, le PureView peine à tenir ses promesses et soufre en plus, d’une incroyable lenteur dans le traitement des images.\r\n\r\nDepuis quelques mois, la photo est véritablement devenue l’argument marketing majeur des smartphones. Google et ses Pixel 3 et 3a au mode Vision de Nuit incroyable, Huawei et son P30 Pro au zoom 10x très performant, ou Samsung et son Galaxy S10 aux photos grand angle bluffantes ont prouvé que l’innovation payait.\r\nAvec le Nokia 9 PureView, Nokia arrive là où on ne l’attendait pas. Habitué aux smartphones de moyenne gamme depuis son rachat par le Finlandais HMD, l’ex numéro un mondial de la téléphonie dégaine un appareil haut de gamme. Le Nokia 9 PureView veut faire la différence en photo. A 699 euros tout de même, peut-il s’imposer face à ses concurrents ?\r\nCinq capteurs, dont trois monochrome\r\n\r\nPour gagner son pari, Nokia s’est associé à Zeiss, le fabricant de lentilles, mais aussi à la start-up Light. Spécialisée en photo, celle-ci avait développé il y a 3 ans le L16, un appareil lesté de 16 modules photo capables de livrer des images en 52 mégapixels. Résultat : la coque arrière du Nokia 9 Pure arbore un étrange carrousel de cinq capteurs photo.', '2008-06-02 00:00:00', '201906206324.jpg', 1, 1),
(4, 'Avoir une mauvaise hygiène bucco-dentaire augmenterait le risque d’avoir un cancer du foie', 'Des chercheurs d’Irlande du Nord ont établi qu’avoir une mauvaise hygiène bucco-dentaire augmenterait le risque d’avoir un cancer du foie de 75 %.\r\n\r\nDes scientifiques irlandais ont établi un lien entre le fait d’avoir une mauvaise hygiène bucco-dentaire et le fait de développer un cancer du foie. Cette étude menée par l’Université Queen’s de Belfast a été publiée dans la revue scientifique United European Gastroenterology Journal.\r\n\r\nUne mauvaise santé bucco-dentaire était déjà un facteur de risque connu pour plusieurs maladies telles que les maladies cardiaques, les accidents vasculaires cérébraux ou encore le diabète, précise l’étude. Pour mettre en évidence une association avec les cancers gastro-intestinaux, les scientifiques irlandais ont mené pendant plusieurs années une enquête auprès d’une cohorte de 469 628 participants britanniques, âgés de 40 à 69 ans.\r\n3e cause de mortalité par cancer\r\n\r\nL’article scientifique précise que les participants ont été classés comme ayant une mauvaise santé bucco-dentaire s’ils déclaraient eux-mêmes des gencives douloureuses, des saignements des gencives et/ou des dents desserrées, « trois marqueurs cliniques de la parodontite ».\r\n\r\nL’étude a conclu qu’une mauvaise santé bucco-dentaire autodéclarée était associée à une augmentation de 75 % du risque de carcinome hépatocellulaire. C’est-à-dire le cancer primitif du foie le plus courant, 5e cause de cancer dans le monde et la 3e cause de mortalité par cancer.', '2019-06-19 00:00:00', '201906206785.jpg', 4, 1),
(5, 'L\'ÉGYPTE DÉBUTE PAR UNE VICTOIRE DANS LA DOULEUR FACE AU ZIMBABWE', 'Les Pharaons d’Egypte ont battu les Warriors du Zimbabwe en match d’ouverture de la CAN 2019 (1-0). Devant un public acquis à leur cause et en présence du président al-Sissi, Mohamed Salah et ses amis ont souffert avant d’assurer un succès précieux grâce à un but de Trezeguet.\r\n\r\nL’avant-match avait commencé dans la musique, la danse, et le « no stress » pour les joueurs du Zimbabwe qui ont quitté leur hôtel en chantant et avec le sourire. Les Warriors avaient choisi leur façon de faire baisser la pression avant de défier le grand favori de la CAN, l’Egypte, soutenu par tout un peuple. Un peuple rouge représenté par les 74 000 spectateurs du stade international du Caire qui n’ont cessé de crier leur amour à leurs Pharaons.\r\n\r\nDevant le président Abdel Fattah al-Sissi, qui a eu moins de succès à l’applaudimètre que la star Mohamed Salah, l’Egypte a assuré une victoire plus compliquée que prévue face à de valeureux Zimbabwéens qui ont longtemps contrarié leurs plans.\r\n\r\nLe spectacle du match a été beaucoup moins réussie que celui de la cérémonie d’ouverture, enflammée et féérique. Sur la pelouse, les 22 acteurs ont disputé une partie serrée, sans grand rythme sans doute gênées par la chaleuret les 31° au coup d’envoi.\r\n\r\nDans son antre, l’Egypte a bien voulu emballer le match dès les premières secondes s’offrant deux belles occasions (10e et 13e) sous l’impulsion de Salah, mais El Said bute sur Sibanda une première fois et ne cadre pas son tir sur sa seconde tentative. Un peu trop dépendants de leur star de Liverpool, les Pharaons ont affiché un jeu stéréotypé qui a eaucoup penché sur le côté droit, celui de Salah. Dans la profondeur comme dans les pieds, le numéro 10 égyptien était régulièrement recherché.', '2019-06-22 11:49:01', '201906206955.jpg', 5, 1),
(6, 'Expert fiscal : Ousmane Sonko intègre l’Ordre national des Experts du Sénégal ', 'Le leader de Pastef, Ousmane Sonko fait désormais partie de l’Ordre national des Experts du Sénégal, comme spécialiste fiscal. Le candidat malheureux à la dernière élection présidentielle, a prêté serment ce vendredi matin à la Cour d’appel de Dakar. Ils sont au total 23 récipiendaires, dont l’ancien ministre sous Abdoulaye Wade, Cheikh Sadibou Fall.\r\n\r\nOusmane Sonko, radié de sa fonction d’inspecteur des Impôts, a dit ne pas craindre un boycott de son expertise de la part de l’administration sénégalaise, en fonction de son statut d’opposant. \r\n\r\n« Je suis heureux de figurer dans cette organisation prestigieuse dont le but est de défendre les contribuables. Maintenant, c’est vrai que dans l’administration, on peut craindre de confier un dossier à un opposant. Mais heureusement que ce travail ne se limite pas qu’au Sénégal », a réagi Ousmane Sonko sur la RFM. ', '2019-06-22 11:49:01', '201906206835.jpg', 3, 1),
(7, 'L’arbre de l’affaire Petro-Tim ne doit pas cacher la forêt de la bonne gouvernance (Par Aminata Touré) ', 'L\'affaire Petro-Tim, récemment relancée par un reportage de la BBC, ne cesse d\'alimenter la polémique au Sénégal quant aux bénéfices que le pays retirera de l\'exploitation prochaine du pétrole et du gaz. Pour l\'ancienne ancienne Première ministre Aminata Touré, désormais présidente du Conseil économique, social et environnemental, les réformes entreprises en matière de gouvernance publique et de transparence dans les industries extractives offrent les garde-fous nécessaires et méritent d\'être saluées. ', '2019-06-22 12:01:23', '2019062066415.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCat` int(11) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCat`, `nom`) VALUES
(1, 'Technologie'),
(2, 'Education'),
(3, 'Politique'),
(4, 'Santé'),
(5, 'Sport'),
(6, 'Economie');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `iduser` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`iduser`, `login`, `pwd`, `Tel`, `mail`) VALUES
(1, 'admin', '8cb2237d0679ca88db64', '778422810', 'kzoldick53@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `fk_idCat` (`idCat`),
  ADD KEY `fk_iduser` (`iduser`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCat`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
