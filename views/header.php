<html>
<head>
    <title><?= TITRE_SITE; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>

</head>
<body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="<?= URL_SITE; ?>">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <?php if(!is_connected()){ ?>
                        <li class="nav-item"><a class="nav-link" href="<?= URL_SITE; ?>?p=register">S'inscrire</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= URL_SITE; ?>?p=login">Connexion</a></li>
                        <?php } else { ?> 
                        <li class="nav-item"><a class="nav-link" href="<?= URL_SITE; ?>?p=profile">Mon profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= URL_SITE; ?>?logout=true">Se déconnecter</a></li>
                        <?php } ?>

                    </ul>
                </div>

        </nav>