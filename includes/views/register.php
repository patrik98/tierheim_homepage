<?php

echo $this->header;

?>

<div id="main">
    <div class="row">
        <h1 class="col-xs-12">Registrieren</h1>
    </div>

    <form method = "post" class="form-horizontal" action="register">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-Mail:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="E-Mail eingeben">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Passwort:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Passwort eingeben">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd2">Passwort wiederholen:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd2" placeholder="Passwort wiederholen">
            </div>
        </div>

        <div class="row">
            <h3 class="col-xs-12">Persönliche Daten</h3>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="vname">Vorname:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vname" placeholder="Vorname">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nname">Nachname:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nname" placeholder="Nachname">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="gebdat">Geburtsdatum:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="gebdat">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="strasse">Straße:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="strasse" placeholder="Straße">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="hausnr">Hausnr.:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="hausnr" placeholder="Hausnr.">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="plz">Postleitzahl:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="plz" placeholder="PLZ">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="ort">Ort:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ort" placeholder="Ort">
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

<?php

echo $this->footer;

?>