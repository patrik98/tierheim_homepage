<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 21.04.2018
 * Time: 18:46
 */
echo $this->header;
?>
<main>
    <div class="container-fluid">

        <!-- Thumbnails & Links zu den Tierprofilen -->
        <div class="row">

            <?php

            $gebdat = new DateTime($this->tierObj->gebdat);
            $today   = new DateTime('today');

            $age = $gebdat->diff($today)->y;
            $ageMonths = $gebdat->diff($today)->m;

            $zeiteinheit = "Jahre";

            if ($age < 1){
                $age = $ageMonths;
                $zeiteinheit = "Monate";
            } elseif($age >= 1 && $age < 2){
                $zeiteinheit = "Jahr";
            }
            ?>

            <div class="col-xs-8 col-md-4">
                <div class="img-thumbnail img-responsive pull-right">
                    <img src=" <?php echo $this->tierObj->bildlink ?>" alt="" style="width:100%">
                </div>
            </div>

            <div class="col-xs-0 col-md-8">
                <h1>Stammdaten</h1>
                <hr class="bar">
                <ul class="animal-data">
                    <li>Name: </li> <p><?php echo $this->tierObj->name; ?></p>
                    <li>Geschlecht: </li> <p><?php echo $this->tierObj->gbezeichnung;?> <?php if($this->tierObj->gbezeichnung=='männlich'):?><i class ="fas fa-mars"></i><?php else:?><i class ="fas fa-venus"></i><?php endif;?></p>
                    <li>Rasse: </li> <p><?php echo $this->tierObj->rasse; ?></p>
                    <li>Alter: </li> <p><?php echo $age." ".$zeiteinheit; ?></p>
                    <li>Geburtsdatum: </li> <p><?php echo $gebdat->format('d.m.Y');?></p>
                <br/>
                    <li><?php echo $this->tierObj->name ?>s Geschichte</li>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </ul>
            </div>

        </div>
        <br/>

        <div class="col-sm-offset-6 col-sm-pull-4 col-xs-12 col-md-offset-6">
            <a class="button pull-left" href="activity">Aktivität hinzufügen</a>
        </div>

        <?php if($this->activities):
            $date = date_create($this->activities->termin);
            ?>

        <div class="activities">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Datum</th>
                    <th scope="col">Aktivität</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($this->activities as $activity): ?>
                    <tr>
                        <td><?php echo $date->format('d.m.Y'); ?></td>
                        <td><?php echo $activity->bezeichnung; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>

    </div>

</main>

<?php

echo $this->footer;

?>
