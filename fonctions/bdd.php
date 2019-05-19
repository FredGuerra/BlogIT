<?php
// L’utilisateur « fittywebdev_BlogIT » a été ajouté à la base de données « fittywebdev_BlogIT
function bdd()
{
    try {
        $bdd = new PDO('mysql:dbname=blog_it;host=localhost;charset=utf8', 'root', 'fittywebdev81000');
    } catch (PDOException $e) {
        echo 'Connexion échouée: ' . $e->getMessage();
    }

    return $bdd;
}
