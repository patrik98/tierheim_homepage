<?php echo $this->header; ?>

<!-- Container -->
<main>
<div class="container-fluid">

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

        //Datums-Format in String zur echo-Ausgabe umwandeln
        $newsdat = new DateTime($news->datum);?>

        <div class="row">   
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
        </div>
        
        <!-- Trennstrich & Abstandshalter -->
        <hr/>
    <?php endforeach; ?>
</div>
</main>
<?php echo $this->footer; ?>