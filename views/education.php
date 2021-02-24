<?php

ob_start();

?>
<section id="education">
    <div class="red-divider"></div>
    <div class="heading">
        <h2>Education</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="education-block">
                    <h5>2002 - 2006</h5>
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Ecole polytechnique - Paris</h3>
                    <h4>Diplôme d'ingénieur informatique</h4>
                    <div class="red-divider"></div>
                    <p>Intelligence Artificielle</p>
                    <p>Système d'information</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="education-block">
                    <h5>2007 - 2009</h5>
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Haribo</h3>
                    <h4>Diplôme d'ingénieur bonbon</h4>
                    <div class="red-divider"></div>
                    <p>Fabricatrion de flanbotti</p>
                    <p>Apprentissage du troll</p>
                    <p>Bonbon responsive avec bootstrap</p>
                </div>
            </div>
        </div>

    </div>

</section>
<?php
$content = ob_get_clean();
require "views/template.php";