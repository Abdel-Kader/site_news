<?php 
    include './partials/header.php';
    //Ne pas oublier d'ajouter le fichier Article.php
    require './include/Article.php';

    $article = new Article();
    $idArticle = "";
    if (isset($_GET['idArticle'])) 
    {
        $idArticle = $_GET['idArticle'];
    }
    
    $detail = $article->getDetailArticle($idArticle);

    $value = $detail->fetch()
 ?>
 <div class="site-main-container">
   
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12 post-list">
                    <!-- Start single-post Area -->
                    <div class="single-post-wrap">
                        <div class="feature-img-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="medias/<?= htmlspecialchars($value->image);?>" alt="">
                        </div>
                        <div class="content-wrap">
                            <ul class="tags mt-10">
                                <li><?= htmlspecialchars($value->nom);?></li>
                            </ul>
                            <a href="#">
                                <h3><?= htmlspecialchars($value->titre);?></h3>
                            </a>
                            <ul class="meta pb-20">
                                <li><span class="lnr lnr-calendar-full"></span><?= htmlspecialchars($value->datePub);?></li>
                                
                            </ul>
                            <p>
                            <blockquote><?= htmlspecialchars($value->description);?></blockquote>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <!-- End single-post Area -->
            </div>
        </div>
    <section>
</div>

<?php include './partials/footer.php'; ?>