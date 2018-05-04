<?php

echo $this->header;

?>

    <div class="container-fluid">
    <!-- Reihe für immer zentrierte Überschrift -->
<div class="row">
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
    <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
        <h1>Login</h1>
        <hr/>
    </div>
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
</div>
    
        <div class="row">
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">

           <form method = "post" class="form-horizontal" action="login">

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
                        <input type="email" class="form-control" id="email_login" name="email_login" placeholder="E-Mail eingeben">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-md-2" for="pwd">Passwort:</label>
                    <div class="col-xs-12 col-md-10">
                        <input type="password" class="form-control" id="pwd_login" name="pwd_login" placeholder="Passwort eingeben">
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
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>
    </div>

<?php

echo $this->footer;

?>