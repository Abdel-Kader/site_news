<?php 
    include './partials/header.php';
 
    //Ne pas oublier d'ajouter le fichier Article.php
    require './include/Article.php';

    $article = new Article();
    $principal = $article->getPrincipalArticle();

    $last = $article->getLastArticles();

    $all = $article->getArticles();
 ?>

<div class="site-main-container">
    <!-- Start top-post Area -->

    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row small-gutters">
                <?php
                    while($article = $principal->fetch())
                    {
                ?>
                    <div class="col-lg-8 top-post-left">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="medias/<?= htmlspecialchars($article->image);?>" alt="">
                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                                <li><?= htmlspecialchars($article->nom);?></li>
                            </ul>
                            <a href="detail_article.php?idArticle=<?php echo ($article->idArticle);?>">
                                <h3><?= htmlspecialchars($article->titre);?>.</h3>
                            </a>
                            <ul class="meta">
                                <li><span class="lnr lnr-calendar-full"></span><?= htmlspecialchars($article->datePub);?></li>
                            </ul><br>
                        </div>
                    </div>
            <?php
                }
                $principal->closeCursor();
            ?>
                <div class="col-lg-4 top-post-right">
                    <?php
                        while($article = $last->fetch())
                        {
                    ?>
                            <div class="single-top-post">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="medias/<?= htmlspecialchars($article->image);?>" alt="">
                                </div>
                                <div class="top-post-details">
                                    <ul class="tags">
                                        <li><?= htmlspecialchars($article->nom);?></li>
                                    </ul>
                                    <a href="detail_article.php?idArticle=<?php echo ($article->idArticle);?>">
                                        <h4><?= htmlspecialchars($article->titre);?></h4>
                                    </a>
                                    <ul class="meta">
                                        <li><span class="lnr lnr-calendar-full"></span><?= htmlspecialchars($article->datePub);?></li>
                                    </ul>
                                </div>
                            </div><br>
                    <?php
                        }
                        $last->closeCursor();
                    ?>
                    
                </div>
                
            </div>
        </div>
    </section>

	<section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title">Latest News</h4>
                            <?php
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
                                    $all->closeCursor();
                                ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<?php include './partials/footer.php'; ?>