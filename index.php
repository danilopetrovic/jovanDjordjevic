<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'UTF-8');
$dir = "galerija_ikona";
$niz = array();

if (is_dir($dir)) {
    setlocale(LC_ALL, 'en_US.utf8');
    $files = scandir($dir);
    foreach ($files as $file) {
        echo $file . "<br>";
        array_push($niz, $file);
    }
} else {
    die('no folder "<strong>' . $dir . '</strong>"...');
}
//if (is_dir($dir)) {
//    $dh = opendir($dir);
//    while ($file = readdir($dh)) {
//        echo $file . "<br>"; // ispisuje imena fajlova iznad dokumenta...
//        array_push($niz, $file);
//    }
//    closedir($dh);
//} else {
//    die('Nema definisanog foldera "<strong>' . $dir . '</strong>"...');
//}
?>
<!DOCTYPE html>
<!--<html lang="en">-->
<html lang="sr-Cyrl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="lightGallery-master/dist/css/lightgallery-bundle.css"/>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="lightGallery-master/dist/lightgallery.min.js"></script>
    <script type="module" src="lightGallery-master/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script type="module" src="lightGallery-master/dist/plugins/zoom/lg-zoom.min.js"></script>
    <script type="module" src="app.js"></script>
</head>
<body>
<div id="lightgallery">
    <!--
    <a href="img/01 - Мртва природа (уље на платну).jpg" data-lg-size="548-450">
        <img alt="01 - Мртва природа (уље на платну).jpg" src="img/01 - Мртва природа (уље на платну).jpg"/>
    </a>
    -->
    <?php for ($i = 2; $i < count($niz); $i++) {
        ?>
        <a href="<?= $dir ?>/<?= $niz[$i]; ?>"><img alt="<?= explode(' = ', explode('.jpg', $niz[$i])[0])[1]; ?>" src="<?= $dir ?>/<?= $niz[$i]; ?>"/></a>
    <?php } ?>
</div>
</body>
</html>