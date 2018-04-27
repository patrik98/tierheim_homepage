<?php echo $this->header; ?>

<!-- Container -->
<div class="container-fluid">

    <!-- Schleife vgl. zu tiere.php mit row -->
    <?php foreach($this->news as $news):?>
        <div class="row">
            <div class="col-xs-4">
                <div class="thumbnail">
                <?php if($news->bildlink != ''):?>
                    <img src="<?php echo $news->bildlink; ?>" alt="<?php echo $news->name; ?>" class="img-rounded img-responsive" />
                    <?php else: ?>
                        <img src="images/600x600.jpg" alt="" class="img-rounded img-responsive" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-8">
                <h1> <?php echo $news->ueberschrift; ?> </h1>
                <p> <?php echo $tier->inhalt; ?> </p>
            </div>
        </div>
        
        <!-- Trennstrich & Abstandshalter -->
        <hr/>
    <?php endforeach; ?>

</div>

<?php echo $this->footer; ?>