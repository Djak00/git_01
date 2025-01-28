<!-- <nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="afficherFruits.php">Fruits</a></li>
        <li><a href="afficherPanier.php">Paniers</a></li>
        <li><a href="ajouterPanier.php">Ajouter des Paniers</a></li>


    </ul>
</nav> -->
<!-- <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark"> -->

<nav class="navbar navbar-expand-lg perso_backgroundColorBlueDarck" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MonSite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="afficherFruits.php">Gestion des fruits</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Paniers
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="afficherPanier.php">Gestion des Paniers</a></li>
                        <li><a class="dropdown-item" href="ajouterPanier.php">Ajout des Paniers</a></li>


                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>