<?php

function doctype() {
echo "<!DOCTYPE HTML>\n";
echo "<!--\n";
echo "    Prologue by HTML5 UP\n";
echo "    html5up.net | @n33co\n";
echo "    Free for personal and commercial use under the CCA 3.0 license echo (html5up.net/license)\n";
echo "-->\n";
}

function head($titlePage) {
    echo "<title>" . $titlePage . " - Ronan GUILBAULT sur github.io</title>\n";
    echo "        <meta charset=\"utf-8\" />\n";
    echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\n";
    echo "        <!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->\n";
    echo "        <link rel=\"stylesheet\" href=\"assets/css/main.css\" />\n";
    echo "        <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->\n";
    echo "        <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->\n";
}

function logo() {
    echo "                <!-- Logo -->\n";
    echo "                <div id=\"logo\">\n";
    echo "                    <span class=\"image avatar48\"><img src=\"images/avatar.jpg\" alt=\"\" /></span>\n";
    echo "                    <h1 id=\"title\">Ronan GUILBAULT</h1>\n";
    echo "                    <p>Étudiant en informatique</p>\n";
    echo "                </div>\n";
}

function nav() {
    echo "                <!-- Nav -->\n";
    echo "                <nav id=\"nav\">\n";
    echo "                    <ul>\n";
    echo "                        <li><a href=\"index.html\" id=\"top-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-home\">Accueil</span></a></li>\n";
    echo "                        <li><a href=\"portfolio.html\" id=\"portfolio-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-th\">Portfolio</span></a></li>\n";
    echo "                        <li><a href=\"aboutme.html\" id=\"about-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user\">CV</span></a></li>\n";
    echo "                        <li><a href=\"credits.html\" id=\"credits-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-envelope\">Crédits</span></a></li>\n";
    echo "                    </ul>\n";
    echo "                </nav>\n";
}

function bottom() {
    echo "            <div class=\"bottom\">\n";
    echo "                <!-- Social Icons -->\n";
    echo "                <ul class=\"icons\">\n";
    echo "                    <li><a href=\"http://www.github.com/bunlanG\" class=\"icon fa-github\"><span class=\"label\">Github</span></a></li>\n";
    echo "                    <li><a href=\"http://www.bitbucket.com/bunlanG\" class=\"icon fa-bitbucket\"><span class=\"label\">Bitbucket</span></a></li>\n";
    echo "                    <li><a href=\"http://www.viadeo.com/fr/profile/ronan.guilbault\" class=\"icon fa-briefcase\"><span class=\"label\">Viadeo</span></a></li>\n";
    echo "                    <li><a href=\"https://fr.linkedin.com/pub/ronan-guilbault/6a/60b/b78\" class=\"icon fa-linkedin\"><span class=\"label\">LinkedIn</span></a></li>\n";
    echo "                </ul>\n";
    echo "            </div>\n";
}

function intro($title) {
    echo "<!-- Intro -->\n";
    echo "            <section id=\"top\" class=\"one dark cover\">\n";
    echo "                <div class=\"container\">\n";
    echo "                    <header>\n";
    echo "                        <h2>" . $title . "</h2>\n";
    echo "                    </header>\n";
    echo "                </div>\n";
    echo "            </section>\n";
}

function footer() {
    echo "<!-- Footer -->\n";
    echo "        <div id=\"footer\">\n";
    echo "            <!-- Copyright -->\n";
    echo "            <ul class=\"copyright\">\n";
    echo "                <li>&copy; Ronan Guilbault, 2015-2016. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a>\n";
    echo "                 with <a href=\"http://html5up.net/prologue\">Prologue</a> template</li>\n";
    echo "            </ul>\n";
    echo "        </div>\n";
}

function scripts() {
    echo "<!-- Scripts -->\n";
    echo "        <script src=\"assets/js/jquery.min.js\"></script>\n";
    echo "        <script src=\"assets/js/jquery.scrolly.min.js\"></script>\n";
    echo "        <script src=\"assets/js/jquery.scrollzer.min.js\"></script>\n";
    echo "        <script src=\"assets/js/skel.min.js\"></script>\n";
    echo "        <script src=\"assets/js/util.js\"></script>\n";
    echo "        <!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->\n";
    echo "        <script src=\"assets/js/main.js\"></script>\n";
}

function headerBody() {
    echo "<!-- Header -->\n";
    echo "        <div id=\"header\">\n";
    echo "            <div class=\"top\">\n";
    logo();
    nav();
    echo "            </div>\n";
    bottom();
    echo "        </div>\n";
}
?>
