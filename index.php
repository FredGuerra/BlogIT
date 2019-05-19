<?php
$title = 'BlogIT-Accueil';
// require 'commons/header.php';

require 'fonctions/bdd.php';
require 'fonctions/blog.php';

$bdd = bdd();
if (!empty($_POST)) {
    $articles = recherche();
} else {
    $articles = articles();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php if (isset($title)): ?>
        <?=$title?>
        <?php else: ?>
        BlogIT
        <?php endif;?>
    </title>
    <link rel="icon" href="images/write-paper-ink.png">

    <!-- CSS ekko -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <!-- Notre police -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Notre CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body data-spy="scroll" data-target="main-nav">
    <!-- header nav titre -->



    <header id="top" class="headerP">
        <div class="container">
            <nav id="main-nav" class="navbar navbar-expand-md  navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                        <i class="login fas fa-terminal fa-1x mt-2 text-white user-link " aria-hidden="true"></i>
                        <!-- <i class="fas fa-terminal fa-2x brand-icon" aria-hidden="true"></i> -->
                        BlogIT
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sibling-fade" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">
                            <div class="nav-item mr-1">
                                <div class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="login fas fa-user-ninja fa-1x mt-3 text-white user-link "
                                            aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-right">
                                        <form action="" method="" class="p-2 text-secondary">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Pseudo" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Mot de passe"
                                                    required>
                                            </div>
                                            <button type="submit" class="btn btn-bg my-2">Connexion</button>
                                        </form>
                                        <div class="dropdown-divider mt-0"> </div>
                                        <a href="#" class="dropdown-item">Inscription</a>
                                        <a href="#" class="dropdown-item">Mot de passe oublié</a>

                                    </div>
                                </div>
                            </div>
                            <li class="nav-item mr-1">
                                <a href="#top" class="nav-link">Accueil</a>
                            </li>
                            <li class="nav-item mr-1">
                                <a href="#aPropos" class="nav-link">A propos</a>
                            </li>
                            <li class="nav-item mr-1">
                                <a href="#blog" class="nav-link">Blog-it</a>
                            </li>
                            <li class="nav-item mr-1">
                                <a href="#galerie" class="nav-link">Portfolio</a>
                            </li>
                            <li class="nav-item mr-1">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link"><i class="fas fa-search"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="text-intro">
                <div class="intro-img">
                    <div class="preTxt font-italic">Vos idées, mon savoir</div>
                    <h1>Fittywebdev</h1>
                    <a href="#blog" class="btn btn-bg bt-3">Blog-it</a>
                    <a href="#galerie" class="btn btn-outline-dark bt-3">Mes projets</a>
                </div>
            </div>
        </div>
    </header>



    <main>


        <!-- A propos -->

        <section id="aPropos">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Hello, moi c'est Fred.</h2>
                        <hr>
                        <p>Voilà, j'y suis mon premier blog...<br>
                            Pour en savoir plus c'est à droite, pour me retrouver sur les réseaux c'est juste la &darr;
                        </p>
                        <p>
                            <div class="d-flex justify-content-between px-2">
                                <a class="login2" href="#"><i class="login fab fa-facebook fa-2x"></i></a>
                                <a class="login2" href="#"><i class="login fab fa-linkedin fa-2x"></i></a>
                                <a class="login2" href="#"><i class="login fab fa-github fa-2x"></i></a>
                                <a class="login2" href="#"><i class="login fab fa-twitter fa-2x"></i></a>
                            </div>
                            <div class="text-center">
                                <button class="mt-5 btn btn-bg">Mon CV</button>
                            </div>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id="accordionExemples">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn" type="button" data-toggle="collapse"
                                            data-target="#collapseOne">
                                            <i class="login fas fa-chevron-right"></i>
                                            &nbsp; Passion
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parent="#accordionExemples">
                                    <div class="card-body">
                                        Je suis autodidacte depuis 2017, en formation de développeur d'application PHP
                                        depuis Avril 2019. Italien d'origine, Non posso vivere senza la mia pasta e un
                                        buono
                                        espresso ! je suis aussi un fou de fitness.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo">
                                            <i class="login fas fa-chevron-right"></i>
                                            &nbsp; Travail
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseTwo" data-parent="#accordionExemples">
                                    <div class="card-body">
                                        J'ai créer BlogIT pour partager mon travail, et ma passion pour le web
                                        développement. Un blog folio simple, extrait sans prétention de ma vie de
                                        développeur.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn" type="button" data-toggle="collapse"
                                            data-target="#collapseThree">
                                            <i class="login fas fa-chevron-right"></i>
                                            &nbsp; Simplicité
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseThree" data-parent="#accordionExemples">
                                    <div class="card-body">
                                        J'aime les sites au design simple, épurés et minimalistes. Mes deux
                                        mantras:<span class="font-italic">"good design is as little design as
                                            possible"</span><span class="font-italic span-dieter">Dieter Rams</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- icones -->
        <section id="icones">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2><i class="login fas fa-code"></i>&nbsp;Front</h2>
                        <p>Utilisation des langages HTML 5, CSS 3, Javascript, Jquery, React, Bootstrap.</p>

                    </div>
                    <div class="col-md-4">
                        <h2><i class="login fas fa-terminal"></i>&nbsp;Back</h2>
                        <p>En formation sur PHP, Symfony et la ligne de commande. Node.js, Wordpress, Python</p>
                    </div>
                    <div class="col-md-4">
                        <h2><i class="login fas fa-palette"></i>&nbsp;Design</h2>
                        <p>Formation Adobe XD et Figma, réalisation de maquettes et de prototypes</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- banner 1 -->

        <section id="banner1" class="py-2">
            <div class="container py-5">
                <h2 class="pb-3">Etes vous prêt à commencer ?</h2>
                <p class="text-dark d-none d-md-block">Vous avez une idée, vous voulez réaliser un site web? Et si nous
                    en
                    discutions autour d'un café?</p>
                <a href="contact.php" class="btn btn-bg">Démarrer maintenant</a>
            </div>
        </section>

        <!-- portfolio -->
        <section id="galerie">
            <div class="container">
                <h2 class="text-center h2Photos">Mes projets</h2>
                <p class="text-center">Mes réalisations</p>

                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row mb-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=250" data-toggle="lightbox"
                                data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/1200/768.jpg?image=250" alt="image portfolio"
                                    class="img-fluid"></a>
                            <a href="https://unsplash.it/1200/768.jpg?image=232" data-toggle="lightbox"
                                data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/1200/768.jpg?image=232" alt="image portfolio"
                                    class="img-fluid"></a>
                            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox"
                                data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/1200/768.jpg?image=253" alt="image portfolio"
                                    class="img-fluid"></a>
                        </div>
                        <div class="row mb-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=222" data-toggle="lightbox"
                                data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/1200/768.jpg?image=222" alt="image portfolio"
                                    class="img-fluid"></a>
                            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox"
                                data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/1200/768.jpg?image=255" alt="image portfolio"
                                    class="img-fluid"></a>
                            <a href="https://unsplash.it/1200/768.jpg?image=200" data-toggle="lightbox"
                                data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/1200/768.jpg?image=200" alt="image portfolio"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- banner2 -->
        <section id="banner2" class="py-2">
            <div class="container">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <p class="font-italic">"En terme de design, il y a selon moi deux choses essentielles: la
                                simplicité et la clarté. Un bon design nait de ces deux éléments"</p>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <p class="font-italic">"J'aime être la bonne personne au mauvais endroit et la mauvaise
                                personne
                                au bon endroit."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog -->
        <section id="blog">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="mb-5 text-center h2Photos">BlogIT: </h2>
                </div>
                <?php
if (isset($_POST["query"])):
?>
                <div class="row mb-2">
                    <div class="col-xs-12">
                        <h4>Résultat de votre recherche avec "<?=$_POST["query"]?>"</h4>
                    </div>
                </div>
                <?php
endif;
?>
                <div class="row">
                    <?php foreach ($articles as $article): ?>
                    <div class="col-md-4 col-sm-6">
                        <article>
                            <h2><?=$article['titre']?></h2>
                            <img src="images/<?=$article['image']?>" class="index-image img-fluid h-100" alt="">
                            <small>Posté le: <time
                                    datetime="<?=$article['publication']?>"><?=formattageDate($article['publication'])?></time></small>
                            <br>
                            <small>
                                <p class="mt-2 badge badge-secondary"><?=$article['categorie']?></p>
                            </small>
                            <br><br>
                            <p><?=$article['accroche'] . "..."?></p>
                            <a href="articles.1.php?id=<?=$article['id']?>" class="btn btn-dark mb-4">Lire la suite</a>
                        </article>
                    </div>
                    <?php endforeach;?>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" action="index.php#blog"
                            class="form-inline my-4 justify-content-center contact-form">
                            <input name="query" class="form-control" type="text" placeholder="Je cherche un article ..."
                                aria-label="Search" value="<?php if (isset($_POST["query"])) {
    echo $_POST["query"];
}
?>">
                            <button class="btn btn-bg my-2" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Rentrer en Contact -->

        <!-- <section id="contact" class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Contactez-moi</h3>
                        <p class="lead">Prêt a écouter vos idées les plus folles, n'hésitez pas !</p>
                        <form action="" method="post">
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nom" name="nom"  required>
                            </div>

                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>

                            <div class="input-group input-group-lg mb-3">
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
        </section> -->
    </main>

    <footer class="text-center p-4 bg-dark">
        <div class="container">

            <div class="row">
                <div class="col d-flex justify-content-around">
                    <a href="inscription.php" class="nav-link">Inscription</a>
                    <a href="connexion.php" class="nav-link">Connexion</a>
                    <a href="#" class="nav-link"><i class="fas fa-door-open"></i></a>
                    <a href="#top" class="nav-link">Compte</a>
                    <a href="#top" class="nav-link">BLogIT</a>
                </div>
            </div>
            <div class="row">
                <div class="col text-white px-5">
                    <p>Tous droits réservés &copy;
                        <span id="year"></span> Fittywebdev
                    </p>
                </div>
            </div>
        </div>
    </footer>




    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="app.js"></script>
</body>

</html>