<?php

ob_start();

?>
<section id="experience">
    <div class="container">
        <div class="white-divider"></div>
        <div class="heading">
            <h2>Expérience Pro</h2>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>GOOGLE</h3>
                            <h4>Dév de génie</h4>
                            <p class="text-muted"><i class="far fa-clock"></i> 2013-2018</p>
                        </div>
                        <div class="timeline-body">
                            <p>- Refonte de google translate pour une traduction plus facile de toute les langues</p>
                            <p>- Redesign total de youtube</p>
                            <p>- Validation de l'arret de google +, qui était une erreur monumentale !</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><i class="fas fa-briefcase"></i></span></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>FACEBOOK</h3>
                            <h4>Formateur de Mark</h4>
                            <p class="text-muted"><i class="far fa-clock"></i> 2013-2018</p>
                        </div>
                        <div class="timeline-body">
                            <p>- Explication d'un meilleur système publicitaire a chi***.</p>
                            <p>- Devellopement d'une IA de surveillance massive.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><i class="fas fa-briefcase"></i></span></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>MICROSOFT</h3>
                            <h4>Consultant</h4>
                            <p class="text-muted"><i class="far fa-clock"></i> 2013-2018</p>
                        </div>
                        <div class="timeline-body">
                            <p>- Aide au design de la <span style="color:green">xboite serie X</span> (une tour parce que j'avais la flemme de refléchir à plus).</p>
                            <p>- Creation de EDGE parce Google me foutais la pression</p>
                            <p>- Boire du café pendant que les autres travaillé.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<?php
$content = ob_get_clean();
require "views/template.php";
