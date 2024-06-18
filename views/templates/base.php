<?php 
?>

<!DOCTYPE html>
<html lang="<?=$lang ?? 'en'; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'Application'; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/mvc/public/css/styles.css">
    <link rel="shortcut icon" href="/mvc/public/img/fav.png" type="image/x-icon">

    <?=$header_scripts; ?>
</head>

<body>

    <header>
        <?=$header ?? ""; ?>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">singup</a>
                        </li>
                    </ul>
              
                </div>
            </div>
          </nav>
    </header>

    <main>
        <div class="container">
          <?=$content; ?>
        </div>  
    </main>

    <footer>
        <?=$footer; ?>

        <section class="bg-info text-center text-lg-start fixed-bottom text-white">          
            <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
                &copy; <?=date('Y'); ?> envoos
              <a class="text-dark" href="https://envoos.com"> <span class="text-white">| Developed by envoos</span></a>
            </div>
        </section>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="/mvc/public/js/main.js"></script>

    <?=$footer_scripts; ?>

</body>

</html>
