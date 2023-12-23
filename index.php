<?php
/**
 * ! sadfasf
 * ? asdfsaf
 * sdfdsafa
 * @param: asdfsaf
* TODO
 * razdvojiti header i footer u 2 odvojena php fajla koji se importuju
 * hader odraditi tako da ima iz "img" foldera portret i potpis i da ispod budu linkovi
 * footer uraditi tako da <i> ikonice budu malo vece i centrirane sve pored texta
*/
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'UTF-8');
$dir = "galerija_ikona";
$niz = array();

if (is_dir($dir)) {
    setlocale(LC_ALL, 'en_US.utf8');
    $files = scandir($dir);
    foreach ($files as $file) {
//        echo $file . "<br>"; // ispisuje imena fajlova iznad dokumenta...
        array_push($niz, $file);
    }
} else {
    die('no folder "<strong>' . $dir . '</strong>"...');
}

// Using opendir and readdir instead of scandir
/*
if (is_dir($dir)) {
    $dh = opendir($dir);
    while ($file = readdir($dh)) {
        echo $file . "<br>"; // ispisuje imena fajlova iznad dokumenta...
        array_push($niz, $file);
    }
    closedir($dh);
} else {
    die('Nema definisanog foldera "<strong>' . $dir . '</strong>"...');
}
*/
?>
<!DOCTYPE html>
<!--<html lang="en">-->
<html lang="sr-Cyrl">
<head>
    <meta charset="UTF-8">
    <meta content="slikar Jovan Djordjevic, Jovan Đorđević, slikar Јован Ђорђевић, slikar, сликар, slike, слике, репродукције, ikone, иконе, ulje na platnu, уље на платну" name="keywords">
    <title>Јован Ђорђевић Сликар</title>
    <link type="text/css" rel="stylesheet" href="lightGallery-master/dist/css/lightgallery-bundle.css"/>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="lightGallery-master/dist/lightgallery.min.js"></script>
    <script type="module" src="lightGallery-master/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script type="module" src="lightGallery-master/dist/plugins/zoom/lg-zoom.min.js"></script>
    <script type="module" src="app.js"></script>
    <link rel="icon" href="img/favicon_painter.png" type="image/x-icon">
    <link href="/fontawesome-free-6.5.1-web/css/fontawesome.min.css" rel="stylesheet">
    <script defer src="fontawesome-free-6.5.1-web\js\all.min.js"></script>
</head>
<body>
<header id="header">
    <h1>Your Website Name</h1>
    <nav>
        <ul>
            <li><a href="#">Галерија Икона</a></li>
            <li><a href="#">Галерија Слика</a></li>
            <li><a href="#">Биографија</a></li>
        </ul>
    </nav>
</header>
<main>
    <div id="lightgallery">
        <?php for ($i = 2; $i < count($niz); $i++) {
            ?>
            <a href="<?= $dir ?>/<?= $niz[$i]; ?>"><img alt="<?= explode(' = ', explode('.jpg', $niz[$i])[0])[1]; ?>" src="<?= $dir ?>/<?= $niz[$i]; ?>"/></a>
        <?php } ?>
    </div>
</main>
<footer id="footer">
    <p>&copy; Сва права резервисана.</p>
    <nav>
        <ul>
            <li><i class="fa-solid fa-map-location-dot"></i> Ул. Војина Ђурашиновића 31, Миријево, 11000 Београд</li>
            <li><a href="tel:+38163/71-87-115"><i class="fa-solid fa-mobile-screen"></i> 063/71-87-115</a></li>
            <li><a href="mailto:sabljabg@gmail.com"><i class="fa-solid fa-envelope"></i> Пошаљите нам е-маил</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>