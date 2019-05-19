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



    <header id="top">
        <div class="container">
            <nav id="main-nav" class="navbar navbar-expand-md  navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                    <i class="login fas fa-terminal fa-1x mt-2 text-white user-link "
                                            aria-hidden="true"></i>
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
                                <a href="#contact" class="nav-link">Contact</a>
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
    <footer class="text-center p-4 bg-dark">
    <div class="container">

        <div class="row">
            <div class="col d-flex justify-content-around">
            <a href="#top" class="nav-link">inscription</a>
            <a href="#top" class="nav-link">Connexion</a>
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
