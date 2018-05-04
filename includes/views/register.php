<?php

echo $this->header;

?>
<div class="container-fluid">

<?php if($this->UserRegistered): ?>
<div class="col-xs-0 col-md-1 col-lg-2"></div>
    <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
    <h4 class="alert alert-success">
        Der Benutzer wurde erfolgreich registiert. Sie können sich nun <a href="login">hier einloggen</a>.
    </h4>
    </div>
    <div class="col-xs-0 col-md-1 col-lg-2"></div>


<?php else: ?>

<!-- Reihe für immer zentrierte Überschrift -->
<div class="row">
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
    <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
        <h1>Registrieren</h1>
        <hr/>
    </div>
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
</div>

    <div class="row">
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
    <div class="col-xs-0 col-md-10 col-lg-8">

    <form method = "post" class="form-horizontal" id="registerForm" action="register">

        <?php if ($this->EmailInUse): true?>

            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Diese E-Mail-Adresse wird bereits verwendet!</h4>
                <p>Bitte verwenden Sie eine andere E-Mail-Adresse.</p>
            </div>

        <?php endif; ?>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="email">E-Mail:</label>
            <div class="col-xs-12 col-md-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail eingeben" maxlength="60" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="pwd">Passwort:</label>
            <div class="col-xs-12 col-md-10">
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Passwort eingeben" maxlength="255" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="pwd2">Passwort wiederholen:</label>
            <div class="col-xs-12 col-md-10">
                <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Passwort wiederholen" maxlength="255" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="vname">Vorname:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="vname" name="vname" placeholder="Vorname" maxlength="100" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="nname">Nachname:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="nname" name="nname" placeholder="Nachname" maxlength="100" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="gebdat">Geburtsdatum:</label>
            <div class="col-xs-12 col-md-10">
                <input type="date" class="form-control" id="gebdat" name="gebdat" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="strasse">Straße:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="strasse" name="strasse" placeholder="Straße" maxlength="50">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="hausnr">Hausnr.:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="hausnr" name="hausnr" placeholder="Hausnr." maxlength="10">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="plz">Postleitzahl:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="plz" name="plz" placeholder="PLZ" maxlength="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="ort">Ort:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="ort" name="ort" placeholder="Ort" maxlength="50">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Registrieren</button>
            </div>
        </div>

            <input type="hidden" name="action" value="register">

    </form>
    </div>
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
    </div>

<?php endif; ?>

</div>
<?php

echo $this->footer;

?>