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
                Ronan GUILBAULT<br/>
                23 ans (8 mai 1992)<br/>
                <span class="icon fa-home"></span> : 15 Route de Poitiers, 86280 Saint-Benoît<br/>
                <span class="icon fa-mobile"></span> : 06 69 05 08 90<br/>
                <span class="icon fa-envelope"></span> : ronan.guilbault@etu.univ-poitiers.fr<br/>
                <span class="icon fa-key"></span> PGP : <a href="http://pgp.mit.edu/pks/lookup?op=get&search=0x9B88592B1DAFDE70" target="_blank">0x9b88592b1dafde70</a><br/>
                </p>
            </section>

            <section>
                <h2><span class="icon fa-graduation-cap"></span> Formation <span class="icon fa-graduation-cap"></span></h2>
                <table class="cv">
                    <tr>
                        <td>2013 - 2016</td>
                        <td><span class="title">Licence Informatique</span><br/>
                        Major L1 et L2<br/>
                        <span class="location">Université de Poitiers</span></td>
                    </tr>
                    <tr>
                        <td>2010 - 2012</td>
                        <td><span class="title">CPGE Mathématiques-Physique</span><br/>
                        <span class="location">Lycée Camille Guérin, Poitiers</span></td>
                    </tr>
                    <tr>
                        <td>2010</td>
                        <td><span class="title">Baccalauréat Scientifique, Spécialité Physique-Chimie</span><br/>
                        Mention Bien<br/>
                        <span class="location">Lycée Camille Guérin, Poitiers</span></td>
                    </tr>
                </table>
            </section>

            <section>
                <h2><span class="icon fa-signal"></span> Compétences <span class="icon fa-signal"></span></h2>
                <table class="cv">
                    <tr>
                        <td>Java</td>
                        <td class="icon fa-battery-3 comp-battery-3"></td>
                        <td><span class="title">Interface Swing, logiciel Ant</span>
                        <ul>
                            <li>Logiciel de gestion de tournois sportifs (<a href="https://github.com/bunlanG/MaYoT" target="_blank">MaYoT</a>)</li>
                            <li>Petit Wizard pour Java (<a href="https://github.com/bunlanG/yaw4j" target="_blank">yaw4j</a>)</li>
                            <li>Un petit jeu, projet du module "POO", en console (<a href="https://bitbucket.org/forbun/projet_java" target="_blank">dépôt</a>)</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>C / C++</td>
                        <td class="icon fa-battery-3 comp-battery-3"></td>
                        <td><span class="title">Interface Qt</span>
                        <ul>
                            <li>Logiciel de gestion de tournois sportifs (1e version) (<a href="https://bitbucket.org/bunlanG/scorelive" target="_blank">ScoreLive</a>)</li>
                            <li>Un binero, projet du module "C", en console avec NCURSES (<a href="https://bitbucket.org/ForgottenBeast/c_project" target="_blank">dépôt</a>)</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Base de données</td>
                        <td class="icon fa-battery-2 comp-battery-2"></td>
                        <td><span class="title">Oracle, MySQL</span>
                        <ul>
                            <li>Projet de "Base de Données" : création d'une base de données pour gérer une médiathèque (en cours)</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Web</td>
                        <td class="icon fa-battery-2 comp-battery-2"></td>
                        <td><span class="title">Front-end et back-end (PHP, MySQL, CakePHP)</span>
                        <ul>
                            <li>Projet de "PHP" : création d'un site de vente avec authentification avec CakePHP (en cours)</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Système</td>
                        <td class="icon fa-battery-3 comp-battery-3"></td>
                        <td><span class="title">Linux (Ubuntu)</span>
                        <ul>
                            <li>SE principal depuis 1 an et demi</li>
                            <li>Création d'un serveur virtuel Linux avec VirtualBox :<ul>
                                <li>Installation d'un serveur LAMP, de Redmine et de Hudson</li>
                                <li>Serveur de test pour le module "PHP"</li>
                            </ul></li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Versionnement</td>
                        <td class="icon fa-battery-3 comp-battery-3"></td>
                        <td><span class="title">Git</span>
                        <ul>
                            <li>Tous les projets effectués en Licence Informatique utilisent Git</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>LaTeX</td>
                        <td class="icon fa-battery-3 comp-battery-3"></td>
                        <td><span class="title">Rédaction de document + présentation avec beamer </span>
                        <ul>
                            <li>Les rapports des projets, ainsi que ma prise de cours depuis 1 an et demi</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Intégration continue</td>
                        <td class="icon fa-battery-2 comp-battery-2"></td>
                        <td><span class="title">Hudson</span>
                        <ul>
                            <li>Mise en place, et utilisation lors du projet de "POO"</li>
                        </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Réseau</td>
                        <td class="icon fa-battery-2 comp-battery-2"></td>
                        <td>
                        <ul><span class="title">Notions</span>
                            <li>Conception et mise en place d'un réseau privé</li>
                            <li>Paramétrage de routeur CISCO</li>
                        </ul>
                        </td>
                    </tr>
                </table>
            </section>

            <section>
                <h2><span class="icon fa-industry"></span> Expériences professionnelles <span class="icon fa-industry"></span></h2>
                <table class="cv">
                    <tr>
                        <td>Juin 2014 -<br/>Décembre&nbsp;2015</td>
                        <td><span class="title">Agent de service</span><br/>
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
                        <td><span class="title">Service à la personne - divers</span><br/>
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
                - Cyclisme (La famille suivait, et mon prénom<span class="title"> a été choisi pour un cycliste : Ronan PENSEC)</p>
                <p>Guitariste depuis 7 ans (mai 2008)</p>
                <p>Je n'ai pas le permis, mais je peux me déplacer à vélo et/ou en bus<br/>
                (j'effectue tous mes trajets ainsi, sauf depuis la rentrée, depuis 7 ans (2009)</p>
            </section>

        </div>

        <?php footer(); ?>

        <?php scripts(); ?>

    </body>
</html>
