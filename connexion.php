<?php
session_start();
if (isset($_SESSION["membre"])) {
    header("Location: compte.php");
}

require_once "fonctions/bdd.php";
include_once "fonctions/membre.php";
$bdd = bdd();
if (!empty($_POST)) {
    $erreur = connexion();
}

?>


<?php require 'commons/header.php';?>
<section id="contact" class="bg-light py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="titreContact">Connexion sur BlogIT</h3>
                        <p class="lead pContact">Votre avis est important !</p>
                        <form action="#" method="post" id="formContact">
                        <?php
if (isset($erreur)):
?>
            <div class="row alert alert-danger">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="message erreur"><?=$erreur?></div>
                </div>
            </div>
            <?php
endif;
?>


                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-users-cog"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control"name="pseudo" placeholder="Pseudo *" value="<?php if (isset($_POST["pseudo"])) {
    echo $_POST["pseudo"];
}
?>">
                            </div>


                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe *">
                            </div>

                            <input type="submit" value="Me connecter" class="btn btn-bg btn-block btn-lg">

                        </form>
                    </div>

                </div>
            </div>
        </section>





<?php require 'commons/footer.php';?>

