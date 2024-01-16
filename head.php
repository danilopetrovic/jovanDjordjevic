<?php
include_once "listOfPages.php";
?>
<!DOCTYPE html>
<!--<html lang="en">-->
<html lang="sr-Cyrl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="slikar Jovan Djordjevic, Jovan Đorđević, slikar Јован Ђорђевић, slikar, сликар, slike, слике, репродукције, ikone, иконе, ulje na platnu, уље на платну" name="keywords">
    <meta name="author" content="Danilo Petrovic">
    <title>Јован Ђорђевић Сликар |
        <?php
        // Makes the title of the page with current page name...
        $output = '';
        foreach ($nizSvihStranica as $stranica) {
            if ($currentPage == $stranica[0]) {
                $output = <<<EOT
                                    $stranica[1]
EOT;
            } else
                $output = "";
            echo $output;
        }
        ?>
    </title>
    <link type="text/css" rel="stylesheet" href="lightGallery-master/dist/css/lightgallery-bundle.css"/>
    <link rel="stylesheet" href="style.css">
    <script defer type="module" src="lightGallery-master/dist/lightgallery.min.js"></script>
    <script defer type="module" src="lightGallery-master/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script defer type="module" src="lightGallery-master/dist/plugins/zoom/lg-zoom.min.js"></script>
    <script defer type="module" src="app.js"></script>
    <link rel="icon" href="img/favicon_painter.png" type="image/x-icon">
    <link href="/fontawesome-free-6.5.1-web/css/fontawesome.min.css" rel="stylesheet">
    <script defer src="fontawesome-free-6.5.1-web\js\all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto@1&display=swap" rel="stylesheet">
</head>
<body>