<?php

ob_start();

?>
    <section id="portfolio">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="http://www.facebook.com" class="thumbnail"  target="_blank" rel="">
                        <img src="img/fb.png" alt="facebook">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://www.google.com" class="thumbnail"  target="_blank" rel="">
                        <img src="img/ggl.png" alt="google">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://www.microsoft.com" class="thumbnail"  target="_blank" rel="">
                        <img src="img/ms.png" alt="microsoft">
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="http://www.discord.com" class="thumbnail"  target="_blank" rel="">
                        <img src="img/discord.png" alt="discord">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://www.twitter.com" class="thumbnail"  target="_blank" rel="">
                        <img src="img/twitter.png" alt="twitter">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://www.linkedin.com" class="thumbnail"  target="_blank" rel="">
                        <img src="img/linkedin.png" alt="linkedin">
                    </a>
                </div>

            </div>

        </div>

    </section>

<?php
$content = ob_get_clean();
require "views/template.php";