<?php
/**
 * ! sadfasf
 * ? asdfsaf
 * TODO
 * footer uraditi tako da <i> ikonice budu malo vece i centrirane sve pored texta
 */
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'UTF-8');
$dir = "galerija_ikona";
$separator = "--";
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
require_once "head.php";
require_once "header.php";
?>
<main>
    <div class="wrapper">
        <div id="lightgallery">
            <?php for ($i = 2; $i < count($niz); $i++) {
                ?>
                <a href="<?= $dir ?>/<?= $niz[$i]; ?>"><img alt="<?= explode(' -- ', explode('.jpg', $niz[$i])[0])[1]; ?>" src="<?= $dir ?>/<?= $niz[$i]; ?>"/></a>
            <?php } ?>
        </div>
    </div>
</main>
<?php
require_once "footer.php"
?>
</body>
</html>