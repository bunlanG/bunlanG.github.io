<?php include("common.php"); ?>
<?php doctype(); ?>
<html>
    <head>
        <?php  head("CV"); ?>
    </head>
    <body>
        <?php headerBody(); ?>

        <!-- Main -->
        <div id="main">
            <?php intro("CV en ligne"); ?>

            <section>
                <h2><span class="icon fa-user"></span> Informations générales <span class="icon fa-user"></span></h2>
                <p>
                Ronan GUILBAULT, 23 ans<br/>
                <span class="icon fa-home"></span> : 15 Route de Poitiers, 86280 Saint-Benoît<br/>
                <span class="icon fa-mobile"></span> : 06 69 05 08 90<br/>
                <span class="icon fa-envelope"></span> : ronan.guilbault@etu.univ-poitiers.fr<br/>
                </p>
            </section>

            <section>
                <h2><span class="icon fa-graduation-cap"></span> Formation <span class="icon fa-graduation-cap"></span></h2>
                <table class="cv">
                    <tr>
                        <td>2013 - 2016</td>
                        <td>Licence Informatique<br/>
                        Major L1 et L2<br/>
                        <span class="location">Université de Poitiers</span></td>
                    </tr>
                    <tr>
                        <td>2010 - 2012</td>
                        <td>CPGE Mathématiques-Physique<br/>
                        <span class="location">Lycée Camille Guérin, Poitiers</span></td>
                    </tr>
                    <tr>
                        <td>2010</td>
                        <td>Baccalauréat Scientifique, Spécialité Physique-Chimie<br/>
                        Mention Bien<br/>
                        <span class="location">Lycée Camille Guérin, Poitiers</span></td>
                    </tr>
                </table>
            </section>

            <section>
                <h2><span class="icon fa-industry"></span> Expériences professionnelles <span class="icon fa-industry"></span></h2>
                <table class="cv">
                    <tr>
                        <td>Juin 2014 - Août 2015</td>
                        <td>Agent de service<br/>
                        Remplacements estivaux et durant les vacances universitaires<br/>
                        <span class="location">Onet Services, Poitiers</span><br/><br/>
                        Principaux sites :<ul>
                        <li>EFS Poitiers : 14 sem.</li>
                        <li>MSA Poitiers : 15 sem.</li>
                        <li>SEFI Poitiers : 3 sem.</li>
                        <li>ESI Poitiers : 2 sem.</li>
                        <li>DAF Poids Lourds 86 : 6 sem.</li>
                        <li>...</li>
                        </ul></td>
                    </tr>
                    <tr>
                        <td>2012 - 2013</td>
                        <td>Service à la personne - divers<br/><br/>
                        <ul>
                        <li>Entretien du château de Saint-Benoit (Mme de PROYART)</li>
                        <li>Garde d'enfants à domicile</li>
                        <li>Entretien d'extérieurs</li>
                        <li>Divers travaux dans une maison</li>
                        </ul></td>
                    </tr>
                </table>
            </section>

            <section>
                <h2><span class="icon fa-info"></span> Divers <span class="icon fa-info"></span></h2>
                <p>
                Fan de sport :<br/>
                - Volley-ball (j'ai été dans l'organisation du Stade Poitevin Volley durant 7 ans (2003-2010))<br/>
                - Cyclisme (La famille suivait, et mon prénom a été choisi pour un cycliste : Ronan PENSEC)</p>
                <p>Guitariste depuis 7 ans (mai 2008)</p>
                <p>Je n'ai pas le permis, mais je peux me déplacer à vélo et/ou en bus<br/>
                (j'effectue tous mes trajets ainsi, sauf depuis la rentrée, depuis 7 ans (2009)</p>
            </section>

        </div>

        <?php footer(); ?>

        <?php scripts(); ?>

    </body>
</html>
