<?php echo $this->header; ?>

    <!-- Content-Container -->
    <div class="container-fluid">

        <!-- Reihe für immer zentrierte Überschrift -->
        <div class="row">
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
                <h1>Informationen</h1>
                <hr/>
            </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>

        <!-- Informationen -->
        <div class="row">
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                    <img class="img-responsive img-rounded pull-left" style="margin-right: 15px" src="images/tierheim.png"/>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita 
                    kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et 
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure 
                    olor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros 
                    et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla 
                    facilisi. Lorem ipsum dolor sit amet
                    </p>
                    </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>

        <!-- Reihe für immer zentrierte Überschrift -->
        <div class="row">
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
                <h1>Neuigkeiten</h1>
                <hr/>
            </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>

        <!-- Button zum Erstellen von News für Admins (nicht funktionsfähig) -->
        <?php if ($this->username == 'tierheim@admin'): ?>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-default">News schreiben</button>
                </div>
            </div>
        <?php endif ?>

        <!-- Schleife zur Ausgabe der News (vgl. zu tiere.php mit row) -->
        <?php foreach ($this->news as $news):

            //News-Datum anlegen
            $newsdat = new DateTime($news->datum); ?>

            <div class="row">
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
                <div class="col-xs-12 col-md-10 col-lg-8">
                    <h1>
                        <?php echo $news->ueberschrift; ?>
                        <!-- Formatierung des Datums -->
                        <small><?php echo $newsdat->format('d.m.Y'); ?></small>
                    </h1>
                    <p> <?php echo $news->inhalt; ?> </p>

                    <!-- Möglichkeit zum Bearbeiten/Löschen für Admins (nicht funktionsfähig) -->
                    <?php if ($this->username == 'tierheim@admin'): ?>
                        <button class="btn btn-sm btn-warning">Bearbeiten</button>
                        <button class="btn btn-sm btn-danger">Löschen</button>
                    <?php endif ?>
                </div>
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php echo $this->footer; ?>