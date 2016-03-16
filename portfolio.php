<?php include("common.php"); ?>
<?php doctype(); ?>
<html>
    <head>
        <?php  head("Portfolio"); ?>
    </head>
    <body>
        <?php headerBody(); ?>

        <!-- Main -->
        <div id="main">
            <?php intro("Portfolio"); ?>

            <section>
                <header>
                    <h2>MaYoT : Manage Your Tournament</h2>
                    <a href="https://github.com/bunlanG/MaYoT" target="_blank">Dépôt Github</a>
                </header>

                <p><a href="https://github.com/bunlanG/MaYoT" target="_blank">MaYoT</a> est un logiciel de gestion de tournois sportifs. Ceci est la ré-écriture d'un autre projet que j'avais codé en C++/Qt, sous le nom de ScoreLive, entre 2011 et 2013.</p>
                <p>MaYoT est codé en Java, et utilise l'environnement graphique Swing.</p>
                <p>Ce projet est en cours de développement sur mon temps libre.</p>
            </section>

        </div>

        <?php footer(); ?>

        <?php scripts(); ?>

    </body>
</html>
