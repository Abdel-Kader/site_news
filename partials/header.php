<?php 
    require './include/database.php';
    //Ne pas oublier d'ajouter le fichier Article.php
    require './include/Categorie.php';

    $categorie = new Categorie();
    
    $all = $categorie->getCategorie();

 ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="E-news">
		<!-- Meta Description -->
		<meta name="description" content="Site de news">
		<!-- Meta Keyword -->
		<meta name="keywords" content="actualité, news, information">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>E-News</title>
		<!--
		CSS
		============================================= -->
		
		<link rel="stylesheet" href="styles/linearicons.css">
		<link rel="stylesheet" href="styles/font-awesome.min.css">
		<link rel="stylesheet" href="styles/bootstrap.css">
		
		<link rel="stylesheet" href="styles/sweetalert.css">
		<link rel="stylesheet" href="styles/main.css">
	</head>
	<body>
		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="index.php">Accueil</a></li>
							<li class="menu-has-children"><a href="">Catégorie</a>
							<ul>
								<?php
									while($categorie = $all->fetch())
									{
								?>
									<li><a href="article_par_categorie.php?idCategorie=<?php echo ($categorie->idCat);?>"><?= htmlspecialchars($categorie->nom);?></a></li>
								<?php
									}
									$all->closeCursor();
								?>
							</ul>
						</li>
						<li><a href="contact.php">Nous Contacter</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					
				</div>
			</div>
		</header>