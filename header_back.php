<?php
$nizSvihStranica = [
        ['galerija_ikona', 'Галерија&nbsp;Икона'],
        ['galerija_slika', 'Галерија&nbsp;Слика'],
        ['biografija', 'Биографија']
];
$currentPage = basename($_SERVER['PHP_SELF']);
//echo "$currentPage";
?>
<header id="header">
    <div class="wrapper">
        <div id="header-icons">
            <a href="index.php">
                <div id="potpis"><img src="img/potpis.gif" alt="Potpis"></div>
                <div id="portret"><img src="img/portret.jpg" alt="Portret Jovan Djordjevic"></div>
            </a>
        </div>
        <nav id="header-nav-links" class="nav">
            <ul>
                <?php
                foreach ($nizSvihStranica as $stranica){
                    $stranica;

                ?>
                <li><a href="galerija_ikona.php">Галерија&nbsp;Икона</a></li>
                <li><a href="galerija_slika.php">Галерија&nbsp;Слика</a></li>
                <li><a href="#">Биографија</a></li>
                <?php

                ?>
            </ul>
        </nav>
    </div>
</header>