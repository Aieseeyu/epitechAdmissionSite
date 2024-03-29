<html>
<head>
    <title><?= TITRE_SITE; ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>

</head>
<body >
        <!-- Responsive navbar-->

        <nav class="navbar navbar-expand-lg bg-black">
                <a class="navbar-brand text-white ms-4 fw-bold" href="<?= URL_SITE; ?>"><i class="fa-solid fa-house"></i> Home</a>
                <button class="navbar-toggler bg-white me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">

                        <?php if(!is_connected()){ ?>
                            <li class="nav-item"><a class="btn btn-dark ms-2" href="<?= URL_SITE; ?>?p=login">Login</a></li>
                            <li class="nav-item"><a class="btn btn-light ms-2" href="<?= URL_SITE; ?>?p=register">Register</a></li>
                        <?php } else { ?> 
                            <li class="nav-item"><a class="btn btn-light ms-2" href="<?= URL_SITE; ?>?p=profile">Profile</a></li>
                            <li class="nav-item"><a class="btn btn-outline-danger ms-2" href="<?= URL_SITE; ?>?logout=true">Logout</a></li>
                        <?php } ?>

                    </ul>
                </div>

        </nav>