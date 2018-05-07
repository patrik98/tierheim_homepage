<?php echo $this->header; ?>
<!-- Content-Container -->
    <div class="container-fluid" id="main-color">

        <!-- Meldung bei erfolgreicher Registrierung -->
        <?php if ($this->UserRegistered): ?>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
                <h4 class="alert alert-success">
                    Der Benutzer wurde erfolgreich registiert. Sie können sich nun <a href="login">hier einloggen</a>.
                </h4>
            </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        
        <!-- Formular für Daten zum Registrieren -->
        <?php else: ?>

            <!-- Reihe für immer zentrierte Überschrift -->
            <div class="row">
                <div class="col-xs-1 col-md-1 col-lg-2"></div>
                <div class="col-xs-10 col-md-10 col-lg-8">
                    <h1 id="h1-modified">Registrieren</h1>
                </div>
                <div class="col-xs-1 col-md-1 col-lg-2"></div>
            </div>

            <!-- Reihe für das Formular -->
            <div class="row">
                <div class="col-xs-1 col-md-1 col-lg-2"></div>
                <div class="col-xs-10 col-md-10 col-lg-8">
                    <!-- Das Formular -->
                    <form method="post" class="form-horizontal" id="registerForm" action="register">
                        <!-- Fehlermeldung bei bereits registrierter E-Mail-Adresse -->
                        <?php if ($this->EmailInUse): true ?>
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4>Diese E-Mail-Adresse wird bereits verwendet!</h4>
                                <p>Bitte verwenden Sie eine andere E-Mail-Adresse.</p>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="email"><h2>E-Mail:</h2></label>
                            <div class="inputWithIcon">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail"
                                       maxlength="60" required>
                                <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="pwd"><h2>Passwort:</h2></label>
                            <div class="inputWithIcon">
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Passwort"
                                       maxlength="255" required>
                                <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="pwd"><h2>Passwort wiederholen:</h2></label>
                            <div class="inputWithIcon">
                                <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Passwort"
                                       maxlength="255" required>
                                <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-lg-8">
                                <h1 id="h1-modified" style="font-size: 18pt">Persoenliche Daten</h1>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="vname"><h2>Vorname:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="vname" name="vname" placeholder="Vorname"
                                       maxlength="100">
                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="nname"><h2>Nachname:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="nname" name="nname" placeholder="Nachname"
                                       maxlength="100">
                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="gebdat"><h2>Geburtsdatum:</h2></label>
                            <div class="inputWithIcon">
                                <input type="date" class="form-control" id="gebdat" name="gebdat"
                                       required>
                                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="strasse"><h2>Straße:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="strasse" name="strasse" placeholder="Straße"
                                       maxlength="100">
                                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="hausnr"><h2>Hausnummer:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="hausnr" name="hausnr"
                                       placeholder="Hausnummer" maxlength="10">
                                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="plz"><h2>Postleitzahl:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="plz" name="plz" placeholder="Postleitzahl"
                                       maxlength="50">
                                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="ort"><h2>Ort:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="ort" name="ort" placeholder="Ort"
                                       maxlength="50">
                                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-pull-2 col-xs-12 col-md-pull-2">
                                <button class="button" type="submit"> Registrieren
                                </button>
                            </div>

                            <input type="hidden" name="action" value="register">
                        </div>
                    </form>
                </div>
                <div class="col-xs-1 col-md-1 col-lg-2"></div>
            </div>
        <?php endif; ?>
    </div>
<?php echo $this->footer; ?>