<?php
require 'commons/header.php';

require 'fonctions/bdd.php';
require 'fonctions/blog.php';

$bdd = bdd();
$article = article();
$nb_commentaires = nb_commentaires();
$commentaires = commentaires();
if (!empty($_POST)) {
    $erreur = commenter();
}

?>


<div id="articleSingle" class="container">
    <div class="row">
        <div class="col-sm-5 mt-5">
            <img class="article-image my-3" src="images/<?=$article["image"]?>" alt="<?=$article["image"]?>">
            <strong>Auteur: </strong><span><?=$article['auteur']?></span>
            <strong>Catégorie: </strong><span class="badge badge-secondary"><?=$article['categorie']?></span>
            <br> <br>
            <strong>
                <p class="date">Posté le:
            </strong><time datetime="<?=$article["publication"]?>"><?=formattageDate($article["publication"])?></time>
            </p>
            <div class="search-submit mt-2">
                <a href="index.php" class="btn btn-bg my-5"> &larr; Retour a l'accueil</a>
                <!-- <a class="my-5 btn btn-bg"> &larr; Retour a l'accueil</a> -->
            </div>


        </div>
        <div class="col-sm-7 mt-5">

            <h3 class="blogTitre"><?=$article["titre"]?></h2>
                <p><?=$article["contenu"]?></p>
        </div>

    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="mb-3">Commentaires (<?=$nb_commentaires?>)</h4>
            <?php
foreach ($commentaires as $commentaire):
?>
            <strong>
                <p class="date">Posté par:
            </strong><?=$commentaire["pseudo"]?> le <time
                datetime="<?=$commentaire["publication"]?>"><?=formattageDate($commentaire["publication"])?></time> :
            </p>
            <p><?=$commentaire["commentaire"]?></p>
            <?php
endforeach;
// if(isset($_SESSION["membre"])) :
?>
        </div>
        <div class="col-md-4">
            <p>lorem</p>
            <p>lorem</p>
        </div>

    </div>
</div>

 <section id="contact" class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Votre commentaire</h4>
                        <p class="lead">Vous devez être inscrit pour laisser un commentaire !</p>
                        <form action="" method="post"> <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </div>
                                <textarea name="texte" class="form-control" placeholder="Message" rows="5"
                                    required></textarea>
                            </div>
                            <div class="form-field" style="display: none;">
                                <input type="hidden" name="url" placeholder="URL">
                            </div>
                            <input type="submit" value="Envoyer" class="btn btn-bg btn-block btn-lg">
                            <div id="status-messages"></div>
                        </form>
                    </div>

                </div>
            </div>
        </section>



<?php require 'commons/footer.php';?>