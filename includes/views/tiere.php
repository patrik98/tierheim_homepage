<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 20.04.2018
 * Time: 10:37
 */

echo $this->header;

?>

<!-- Profilliste -->
<div class="container-fluid"> <!-- umfassender Container -->

    <div class = "row">

    <?php foreach($this->tiere as $tier):

        $gebdat = new DateTime($tier->gebdat);

        ?>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">

            <!-- Profil 1 -->
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <?php if($tier->bildlink != ''):?>
                            <img src="<?php echo $tier->bildlink; ?>" alt="<?php echo $tier->name; ?>" class="img-rounded img-responsive" />
                        <?php else: ?>
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4> <?php echo $tier->name; ?>
                            </h4>

                        <p><i class="fas fa-calendar-alt"></i> geboren am: <?php echo $gebdat->format('d.m.Y'); ?></p>
                        <p><?php if($tier->gbezeichnung=='männlich'):?><i class ="fas fa-mars"></i><?php else:?><i class ="fas fa-venus"></i><?php endif;?> <?php echo $tier->gbezeichnung; ?></p>
                        <p><i class="fas fa-info-circle"></i> <?php echo $tier->rasse ?></p>

                            <!-- Split button -->
                        <div class="btn-group">
                            <a href="tierprofil?id=<?php echo $tier->tierid; ?>" class="btn btn-primary">
                                <?php echo $tier->name; ?>s Profil anzeigen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php

echo $this->footer;

?>