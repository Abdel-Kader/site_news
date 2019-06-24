<?php 
    include './partials/header.php';
    //Ne pas oublier d'ajouter le fichier Article.php
    require './include/Article.php';

    $article = new Article();
    $idCategorie = "";
    if (isset($_GET['idCategorie'])) 
    {
        $idCategorie = $_GET['idCategorie'];
    }
    
    $all = $article->getArticleParCategorie($idCategorie);

    $categorie = $article->getNomCategorie($idCategorie);
    $value = $categorie->fetch()
 ?>

<div class="site-main-container">
    <!-- Start top-post Area -->

    
	<section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title"><?= htmlspecialchars($value->nom);?></h4>
                            <?php
                                if($all->rowCount() > 0){

                                while($article = $all->fetch())
                                {
                            ?>
                                    <div class="single-latest-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="medias/<?= htmlspecialchars($article->image);?>" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><?= htmlspecialchars($article->nom);?></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="detail_article.php?idArticle=<?php echo ($article->idArticle);?>">
                                                <h4><?= htmlspecialchars($article->titre);?></h4>
                                            </a>
                                            <ul class="meta">
                                                <li><span class="lnr lnr-calendar-full"></span><?= htmlspecialchars($article->datePub);?></li>
                                            </ul>
                                            <p class="excert">
                                            <?= htmlspecialchars($article->description);?>
                                            </p>
                                        </div>
                                    </div>
                                <?php
                                    }
                                    } else {
                                        ?>
                                        <br><br><div class="alert alert-danger">Aucun article ne correspond à la catégorie</div>
                                    <?php
                                    }
                                    $all->closeCursor();
                                ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './partials/footer.php'; ?>