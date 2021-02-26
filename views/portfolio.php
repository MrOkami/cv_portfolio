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
                    <a href="https://amzn.to/2PaGAMe" class="thumbnail"  target="_blank" rel="">
                        <img src="img/dl2.png" alt="ampoules">
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
                        <img src="img/tt2.png" alt="twitter">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.linkedin.com/in/guillaume-farkas-4823b2205/" class="thumbnail"  target="_blank" rel="">
                        <img src="img/linkedin2.png" alt="linkedin">
                    </a>
                </div>

            </div>

        </div>

    </section>

<?php
$content = ob_get_clean();
require "views/template.php";