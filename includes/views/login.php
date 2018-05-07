<?php echo $this->header; ?>
<!-- Content-Container -->
<div class="container-fluid">
    <!-- Reihe für immer zentrierte Überschrift -->
    <div class="row">
        <div class="col-xs-1 col-md-1 col-lg-2"></div>
        <div class="col-xs-10 col-md-10 col-lg-8">
            <h1 id="h1-modified">Login</h1>
        </div>
        <div class="col-xs-1 col-md-1 col-lg-2">
        </div>
    </div>

    <!-- Reihe für Login-Formular -->
    <div class="row">
        <div class="col-xs-1 col-md-1 col-lg-2"></div>
        <div class="col-xs-10 col-md-10 col-lg-8">
            <span id="login-text">Sie besitzen noch keinen Account? Dann können Sie sich 
                <p><a style="font-weight: bold" href="register">hier registrieren.</a></p>
            </span>

            <!-- Das Formular -->
            <form method="post" class="form-horizontal" action="login">
                <!-- Fehlermeldung bei falschem Passwort einblenden -->
                <?php if ($this->errorPasswd == true): ?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4>Benutzername und/oder Passwort sind falsch</h4>
                        <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label class="col-xs-12 col-md-2" for="email"><h2>E-Mail:</h2></label>
                    <div class="inputWithIcon">
                        <input type="email" class="form-control" id="email_login" name="email_login"
                               placeholder="E-Mail" required>
                        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-md-2" for="pwd"><h2>Passwort:</h2></label>
                    <div class="inputWithIcon">
                        <input type="password" class="form-control" id="pwd_login" name="pwd_login"
                               placeholder="Passwort" required>
                        <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-xs-offset-1 col-md-offset-2">
                    <button class="button" type="submit">Login</button>
                </div>
                <input type="hidden" name="action" value="login">
                </div>
            </form>
        </div>
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
    </div>
</div>

<?php echo $this->footer; ?>


