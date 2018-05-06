<?php echo $this->header; ?>

<!-- Container -->
<div class="container-fluid" id="main-color">

<!-- Reihe für immer zentrierte Überschrift -->
<div class="row">
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
    <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
        <h1>Aktuelle Infos</h1>
        <hr/>
    </div>
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
</div>

    <!-- Button zum Erstellen von News -->
    <?php if($this->username == 'tierheim@admin'): ?>
    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-default">News schreiben</button>
        </div>
    </div>
    <?php endif?>

    <!-- Schleife vgl. zu tiere.php mit row -->
    <?php foreach($this->news as $news):

        //News-Datum anlegen
        $newsdat = new DateTime($news->datum);?>

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
                <?php if($this->username == 'tierheim@admin'): ?>
                    <button class="btn btn-sm btn-warning">Bearbeiten</button>
                    <button class="btn btn-sm btn-danger">Löschen</button>
                <?php endif?>
            </div>
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
        </div>
    <?php endforeach; ?>
</div>
<?php echo $this->footer; ?>