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
