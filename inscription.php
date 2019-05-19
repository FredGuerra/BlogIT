<?php
session_start();

require 'commons/header.php';

if (isset($_SESSION["membre"])) {
    header("Location: compte.php");
}

require "fonctions/bdd.php";
require "fonctions/membre.php";
$bdd = bdd();
if (!empty($_POST)) {
    $erreurs = inscription();
}

?>



<section id="contact" class="bg-light py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="titreContact">Inscription sur BlogIT</h3>
                        <p class="lead pContact">Incrivez-vous pour donner votre avis !</p>
                        <form action="#" method="post" id="formContact">
                        <?php
if (isset($erreurs)):
    if ($erreurs):
        foreach ($erreurs as $erreur):
        ?>
																										            <div class="row mb-3 alert alert-danger">
																										                <div class="col-sm-6 col-sm-offset-3">
																										                    <div class="message erreur"><?=$erreur?></div>
																										                </div>
																										            </div>
																										            <?php
    endforeach;
else:
?>
            <div class="row mb-3 alert alert-success">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="message confirmation">Votre inscription a bien été prise en compte !</div>
                </div>
            </div>
            <?php
endif;
endif;
?>
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo *" value="<?php if (isset($_POST["pseudo"])) {
    echo $_POST["pseudo"];
}
?>">
                            </div>

                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control"  name="email" placeholder="Adresse mail *" value="<?php if (isset($_POST["email"])) {
    echo $_POST["email"];
}
?>">
                            </div>
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="emailconf"  placeholder="Vérification de l'e-mail *" value="<?php if (isset($_POST["emailconf"])) {
    echo $_POST["emailconf"];
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
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="passwordconf" placeholder="Vérification du mot de passe *">
                            </div>
                            <input type="submit" value="Je m'inscris" class="btn btn-bg btn-block btn-lg">

                        </form>
                    </div>

                </div>
            </div>
        </section>





<?php require 'commons/footer.php';?>
