<?php

ob_start();

?>


<button type="button" class="amp btn btn-outline-info" data-toggle="modal" data-target="#contact" ">
Contactez-moi
</button>
<!-- Modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                    <!--------------------------NOM------------------------------------->

                    <div class="form-group">
                        <label for="name">Votre Nom:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required/>
                    </div>

                    <!------------ Email--------------->

                    <div class="form-group">
                        <label for="email">Votre email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required/>
                    </div>

                    <!------------Message--------------->

                    <div class="form-group">
                        <label for="comment">Votre message:</label>
                        <textarea class="form-control" id="comment" name="comment" required></textarea>
                    </div>

                    <!--------------- bouton validation --------------->

                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">


                </form>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>
    </div>
</div>
<?php



$content = ob_get_clean();

require "views/template.php";
?>