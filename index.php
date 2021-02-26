
<?php
ob_start();
$title = "Portfolio";
?>




    <section id="about" class="container-fluid">

        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="img/tmm.jpg" alt="pp" class="rounded-circle" width="50%">
        </div>

        <div class="heading">
            <h1>Portfolio</h1>
            <h3>Développeur Web</h3>
            <p>Ce CV/Portfolio est un troll, mais vous pouvez toujours me contacter :)</p>
            <?php
            include "views/contact.php";
            ?>

        </div>

        <section>
            <?php
            include "views/competence.php";
            ?>
        </section>

        <section>
            <?php
            include "views/experience.php";
            ?>
        </section>

        <section>
            <?php
            include "views/education.php";
            ?>
        </section>

        <section>
            <?php
            include "views/portfolio.php";
            ?>
        </section>

        <section>
            <?php
            include "views/recommandation.php";
            ?>
        </section>

 <footer class="text-center">
        <a href="#about">
            <i class="fas fa-caret-up fa-3x"></i>
        </a>
            <h6>Retourner en haut</h6>
 </footer>







<?php
$content = ob_get_clean();
require "views/template.php";
