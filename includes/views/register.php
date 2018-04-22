<?php

echo $this->header;

?>

<div id="main">

<?php if($this->UserRegistered): ?>
    <p class="alert alert-success">
        Der Benutzer wurde erfolgreich registiert. Sie können sich nun <a href="login">hier einloggen</a>.
    </p>

<?php else: ?>

    <div class="row">
        <h1 class="col-xs-12">Registrieren</h1>

        <p class="col-xs-12 col-md-10">
            Sie haben sich bereits registriert? Dann können Sie sich <a href="login">hier einloggen</a>.
        </p>
    </div>

    <form method = "post" class="form-horizontal" id="registerForm" action="register">

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
            <label class="col-xs-12 col-md-2" for="pwd2">Passwort wiederholen:</label>
            <div class="col-xs-12 col-md-10">
                <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Passwort wiederholen">
            </div>
        </div>

        <div class="row">
            <h3 class="col-xs-12">Persönliche Daten</h3>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="vname">Vorname:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="vname" name="vname" placeholder="Vorname">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="nname">Nachname:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="nname" name="nname" placeholder="Nachname">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="gebdat">Geburtsdatum:</label>
            <div class="col-xs-12 col-md-10">
                <input type="date" class="form-control" id="gebdat" name="gebdat">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="strasse">Straße:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="strasse" name="strasse" placeholder="Straße">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="hausnr">Hausnr.:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="hausnr" name="hausnr" placeholder="Hausnr.">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="plz">Postleitzahl:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="plz" name="plz" placeholder="PLZ">
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-md-2" for="ort">Ort:</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" class="form-control" id="ort" name="ort" placeholder="Ort">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Registrieren</button>
            </div>
        </div>

            <input type="hidden" name="action" value="register">

    </form>

<?php endif; ?>

</div>

<?php

echo $this->footer;

?>