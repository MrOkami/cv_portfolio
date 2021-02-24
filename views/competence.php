<?php

ob_start();

?>
<section id="skills">
    <div class="red-divider"></div>
    <div class="heading">
        <h2 style="margin-bottom: 30px;">Compétences</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <h5>HTML 85%</h5>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <h5>CSS 85%</h5>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                        <h5>JAVASCRIPT 90%</h5>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <h5>PHP 85%</h5>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                        <h5>BOOTSTRAP 80%</h5>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                        <h5>JQUERY 65%</h5>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "views/template.php";