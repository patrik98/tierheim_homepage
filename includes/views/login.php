<?php

echo $this->header;

?>
    <div id="main">
        <div class="row">
            <h1 class="col-xs-12">Login</h1>

            <p class="col-xs-12 col-md-10">
                Sie besitzen noch keinen Account? Dann können Sie sich <a href="register">hier registrieren</a>.
            </p>

           <form method = "post" class="form-horizontal col-xs-12" action="login">

               <?php if($this->errorPasswd == true): ?>
                   <div class="alert alert-danger alert-dismissible fade in" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                       <h4>Benutzername und/oder Passwort sind falsch</h4>
                       <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                   </div>
               <?php endif; ?>

                <div class="form-group">
                    <label class="col-xs-12 col-md-2" for="email">E-Mail:</label>
                    <div class="col-xs-12 col-md-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail eingeben">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-md-2" for="pwd">Passwort:</label>
                    <div class="col-xs-12 col-md-10">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Passwort eingeben">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>

                    <input type="hidden" name="action" value="login">
                </div>
            </form>
        </div>
    </div>

<?php

echo $this->footer;

?>