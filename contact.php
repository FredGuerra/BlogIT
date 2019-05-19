<?php
session_start();

require 'commons/header.php';

require "fonctions/bdd.php";
require "fonctions/contact.php";
$bdd = bdd();
if (!empty($_POST)) {
    $erreurs = contact();
}

?>



<section id="contact" class="bg-light py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="titreContact">Contactez-moi</h3>
                        <p class="lead pContact">Prêt a écouter vos idées les plus folles, n'hésitez pas !</p>
                        <form action="#" method="post" id="formContact">
                        <?php
if (isset($erreurs)):
    if ($erreurs):
        foreach ($erreurs as $erreur):
        ?>
																						            <div class="row mb-3 alert alert-danger">
																						                <div class="col-xs-12">
																						                    <div class="message erreur"><?=$erreur?></div>
																						                </div>
																						            </div>
																						            <?php
    endforeach;
else:
?>
            <div class="row mb-3 alert alert-success">
                <div class="col-xs-12">
                    <div class="message confirmation">Votre message a bien été envoyé !</div>
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
                                <input type="text" class="form-control" placeholder="Nom" name="nom"  value="<?php if (isset($_POST["nom"])) {
    echo $_POST["nom"];
}
?>">
                            </div>

                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" name="email"  value="<?php if (isset($_POST["email"])) {
    echo $_POST["email"];
}
?>">
                            </div>

                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </div>
                                <textarea name="texte" class="form-control" placeholder="Message" rows="5"
                                    ><?php if (isset($_POST["texte"])) {
    echo $_POST["texte"];
}
?></textarea>
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