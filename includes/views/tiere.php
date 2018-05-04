<?php echo $this->header;?>
<div class="container-fluid">
<div class="row">

    <?php foreach($this->tiere as $tier):
        //Geburtsdatum anlegen
        $gebdat = new DateTime($tier->gebdat);

        //Bestimmung aktuelles Alter als Jahre und Monate (für Tiere jünger 1)
        $today  = new DateTime('today');
        $age_years = $gebdat->diff($today)->y;
        $age_months = $gebdat->diff($today)->m;

        //Formatierung des ersten Buchstaben zum Großbuchstaben
        $geschlecht = ucfirst($tier->gbezeichnung);
    ?>

    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><?php echo $tier->name; ?></h4></div>
            <div class="panel-body">
            <!-- Neue Row für Unterteilung des Panels in 50% Bild und 50% Text -->
                <div class="row">
                    <!-- Bild -->
                    <div class="col-xs-6">                        
                        <?php if($tier->bildlink != ''):?>
                            <img src="<?php echo $tier->bildlink; ?>" alt="<?php echo $tier->name; ?>" class="img-rounded img-responsive" />
                        <?php else: ?>
                            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                        <?php endif; ?>
                    </div>
                    <!-- Text -->
                    <div class="col-xs-6">
                        <p>Geschlecht: <?php echo $geschlecht;?> <?php if($tier->gbezeichnung=='männlich'):?><i class ="fas fa-mars"></i><?php else:?><i class ="fas fa-venus"></i><?php endif;?></p>
                        <p>Rasse: <?php echo $tier->rasse; ?></p>
                        <!-- Anzeige des Alters wenn älter 1 Jahr, genau 1 Jahr oder jünger 1 Jahr -->
                        <p>Alter: 
                            <?php if ($age_years < 1):
                                echo $age_months; ?> Monate</p>
                            <?php elseif ($age_years > 1):
                                echo $age_years; ?> Jahre</p>
                            <?php elseif ($age_years == 1):
                                echo $age_years; ?> Jahr</p>
                            <?php endif?>
                        <p>Geboren am: <?php echo $gebdat->format('d.m.Y');?></p>
                        <div class="btn-group">
                            <a href="tierprofil?id=<?php echo $tier->tierid; ?>" class="btn btn-default">
                                <span><i class="glyphicon glyphicon-share-alt"></i> Profil</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
</div>
</div>

<?php echo $this->footer;?>