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
                    <p> Seit dem August 1957 sehen wir, die Mitglieder des Ti(e)roler Tierschutzvereins (kurz: TTV), die Rettung und Verpflegung der Tiere in Not
                        als unsere Bestimmung. Zehntausende von Tieren konnte bislang in unserer Obhut geholfen werden, täglich finden mit unserer Hilfe Tiere
                        ein neues Zuhause. Unser Tierschutzverein beherbergt tagtäglich an die 100 tierische Schützlinge, vom verletzten Wildtier bis zu Katze, Hund oder Kleintier.
                        Wir setzen einen Schwerpunkt auf die Beschäftigung unserer geliebten Vierbeiner - Menschen mit dem Herzen am rechten Fleck können sich auf dem dementsprechenden
                        <a href="tiere" style="font-weight: bold">Tierprofil</a> für Aktivitäten eintragen, sei es das Gassi gehen mit einen unserer herumtobenden Hunde oder alleine das Streicheln unserer Katzen - für jede Hilfe sind
                        wir sehr dankbar. Falls Sie weitere Fragen haben, zögern Sie nicht, uns zu <a href="kontakt">kontaktieren</a>.
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