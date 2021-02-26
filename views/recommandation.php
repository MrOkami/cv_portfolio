<?php

ob_start();

?>
<section id="recommandation">

    <div class="container">
        <div class="red-divider"></div>
        <div class="heading">
            <h2>Recommandation</h2>
        </div>

        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Oka, t'es le best. J'ai jamais bossé avec un con pareil !</h3>
                    <h4>"Larry page, Google Co-Founder"</h4>
                </div>
                <div class="carousel-item">
                    <h3>Merci pour tout se que tu m'as enseigné. Je serais le meilleur clown graçe à toi, Oka !</h3>
                    <h4>"Mark Zuckerberg, Facebook Founder & CEO"</h4>
                </div>
                <div class="carousel-item">
                    <h3>Oka, Tu nous as sauvé. La Xboite, ressemble enfin à une vrai boite !</h3>
                    <h4>"Phil Spencer, CEO Microsoft Xbox"</h4>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class="fas fa-caret-left fa-3x"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class="fas fa-caret-right fa-3x"></i>
            </a>
        </div>

    </div>
</section>

<?php
$content = ob_get_clean();
require "views/template.php";
