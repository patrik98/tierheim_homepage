<?php echo $this->header; ?>

<!-- Container -->
<div class="container-fluid">

    <!-- Schleife vgl. zu tiere.php mit row -->

    <?php foreach($this->news as $news):?>

        <div class="row">

            <div class="col-xs-8">
                <h1> <?php echo $news->ueberschrift; ?> </h1>
                <p> <?php echo $news->inhalt; ?> </p>
            </div>
        </div>
        
        <!-- Trennstrich & Abstandshalter -->
        <hr/>
    <?php endforeach; ?>

</div>

<?php echo $this->footer; ?>