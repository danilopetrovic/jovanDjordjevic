<header id="header">
    <div class="wrapper">
        <div id="header-icons">
            <a href="galerija_ikona.php"><img id="potpis" src="img/potpis.gif" alt="Potpis"><img id="portret" src="img/portret.jpg" alt="Portret Jovan Djordjevic"></a>
        </div>
        <nav id="header-nav-links" class="nav">
            <ul>
                <?php
                // Makes active the link of current page
                $output = '';
                foreach ($nizSvihStranica as $stranica) {
                    if ($currentPage == $stranica[0]) {
                        $output = <<<EOT
                                    <li><a href="#" class="active">$stranica[1]</a></li>
EOT;
                    } else
                        $output = <<<EOT
                                    <li><a href="$stranica[0]">$stranica[1]</a></li>
EOT;
                    echo $output;
                }
                ?>
            </ul>
        </nav>
    </div>
</header>