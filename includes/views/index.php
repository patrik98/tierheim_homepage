<?php echo $this->header; ?>

    <!-- Container -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-7">
                <div class="row">
                    <div class="col xs-8 pull-left"><img class="img-responsive img-rounded" src="images/tierheim.png"
                                                         style="margin-right: 25px"/></div>
                    <div class="col-md-offset-5 col-xs-push-10">
                        <p>
                        <h1 style="margin-top: 0"> Informationen</h1>Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem
                        vel eum iriure dolor in hendre </p></div>
                </div>
            </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>
    <br/><hr/><br/>

        <!-- Reihe für immer zentrierte Überschrift -->
        <div class="row">
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
                <h1>Neuigkeiten</h1>
                <hr/>
            </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>

        <!-- Button zum Erstellen von News -->
        <?php if ($this->username == 'tierheim@admin'): ?>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-default">News schreiben</button>
                </div>
            </div>
        <?php endif ?>

        <!-- Schleife vgl. zu tiere.php mit row -->
        <?php foreach ($this->news as $news):

            //News-Datum anlegen
            $newsdat = new DateTime($news->datum); ?>

            <div class="row">
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
                <div class="col-xs-12 col-md-10 col-lg-8">
                    <h1>
                        <?php echo $news->ueberschrift; ?>
                        <!-- Formatierung des Datum-Strings -->
                        <small><?php echo $newsdat->format('d.m.Y'); ?></small>
                    </h1>
                    <p> <?php echo $news->inhalt; ?> </p>

                    <!-- Möglichkeit zum Bearbeiten/Löschen je nach Nutzeraccount ein-/ausblenden -->
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