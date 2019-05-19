<?php
session_start();

require 'commons/header.php';

if (!isset($_SESSION["membre"])) {
    header("Location: connexion.php");
}

require_once "fonctions/bdd.php";
include_once "fonctions/membre.php";
include_once "fonctions/blog.php";
$bdd = bdd();
$infos = infos();
$commentaires = commentaires_user();
?>

<section id="contact" class="bg-light py-5 mt-5">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h3>Bienvenue <?=$infos["pseudo"]?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Adresse e-mail : <?=$infos["email"]?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Derniers commentaires !</h3>
            </div>
        </div>
        <?php
foreach ($commentaires as $commentaire):
?>
        <div class="row">
            <div class="col-lg-12">
                <p class="date">Posté sur l'article "<?=$commentaire["titre"]?>" le <time datetime="<?=$commentaire["publication"]?>"><?=formattage_date($commentaire["publication"])?></time> :</p>
                <p><?=$commentaire["commentaire"]?></p>
            </div>
        </div>
        <?php
endforeach;
?>
</div>
</section>
<?php require 'commons/footer.php';?>