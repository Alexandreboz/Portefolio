<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="shortcut icon" href="images.favicon.ico" type="image/x-icon"> -->
</head>

<body>
    <?php
    include 'common/navigation.php';
    if (!isset($page)) {
        $page = "accueil.php";
    }
    switch ($page) {
        case 'projet':
            include 'content/projet.php';
            break;
        case 'veille':
            include 'content/veille.php';
            break;
        case 'cv':
            include 'content/cv.php';
            break;
        case 'accueil':
            include 'content/accueil.php';
            break;
        case 'veille_player':
            include 'content/veille_player.php';
            break;
        default:
            header('location: content/404.html');
            die();
    }
    ?>
    <script src="js/main.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>