<?php
$dir = "img2";
$niz = array();

if (is_dir($dir)) {
    $dh = opendir($dir);
    while ($file = readdir($dh)) {
        echo " | " . $file; // ispisuje imena fajlova iznad dokumenta...
        array_push($niz, $file);
    }
    closedir($dh);
} else {
    die('Nema "$dir" foldera...');
}
?>
<!DOCTYPE html>
<html lang="en">
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
        <a href="<?= $dir ?>/<?= $niz[$i]; ?>" data-lg-size="548-450">
            <img alt="<?= explode(' - ', explode('.jpg', $niz[$i])[0])[1]; ?>" src="<?= $dir ?>/<?= $niz[$i]; ?>"/> </a>
    <?php } ?>
</div>
</body>
</html>