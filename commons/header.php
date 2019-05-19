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
                                <a href="inscription.php" class="nav-link">Inscription</a>
                            </li>
                            <li class="nav-item mr-1">
                                <a href="connexion.php" class="nav-link">Connexion</a>
                            </li>
                            <!-- <li class="nav-item mr-1">
                                <a href="compte.php" class="nav-link">Compte</a>
                            </li> -->
                            <li class="nav-item mr-1">
                                <a href="deconnexion.php" class="nav-link">Déconnexion</a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    <main>
