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
                <div class="thumbnail">
                    <img src=" <?php echo $this->tierObj->bildlink ?>" alt="" style="width:100%">
                    <div class="caption">
                        <p><?php echo $this->tierObj->name; ?>, <?php echo $age." ".$zeiteinheit; ?> alt</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-0 col-md-8">
                <h2><?php echo $this->tierObj->name ?>'s Geschichte</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>


        <!-- Übersicht Aktivitäten -->

        <!-- Montag - Mittwoch -->

        <form method = "post" id="activityForm" action="addActivity">

            <div class="row">

                <?php

                $monday = date('d.m.Y', strtotime('monday this week'));
                $tuesday = date('d.m.Y', strtotime('monday this week'.'+1 day'));
                $wednesday = date('d.m.Y', strtotime('monday this week'.'+2 days'));
                $thursday = date('d.m.Y', strtotime('monday this week'.'+3 days'));
                $friday = date('d.m.Y', strtotime('monday this week'.'+4 days'));
                $saturday = date('d.m.Y', strtotime('monday this week'.'+5 days'));

                ?>

                <!-- Montag -->

                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">Montag, <?php echo $monday; ?></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <input type ="text" class="form-control" id="termin" name="termin" value="<?php echo $monday;?>" disabled>
                                    <input type="text" class="form-control" id="activity" name="activity" placeholder = "Aktivität" maxlength="100">
                                    <button type="submit" class="btn btn-success">Hinzufügen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="action" value="addActivity">

                <!-- Dienstag -->
                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2">Dienstag, <?php echo $tuesday;?></a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <input type ="text" class="form-control" id="termin2" name="termin2" value="<?php echo $tuesday;?>" disabled>
                                    <input type="text" class="form-control" placeholder = "Aktivität" maxlength="100">
                                    <button type="submit" class="btn btn-success">Hinzufügen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Mittwoch -->
                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse3">Mittwoch, <?php echo $wednesday; ?></a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <input type ="text" class="form-control" id="termin3" name="termin3" value="<?php echo $wednesday;?>" disabled>
                                    <input type="text" class="form-control" placeholder = "Aktivität" maxlength="100">
                                    <button type="submit" class="btn btn-success">Hinzufügen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donnerstag - Samstag -->
            <div class="row">
                <!-- Donnerstag -->
                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse4">Donnerstag, <?php echo $thursday;?></a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <input type ="text" class="form-control" id="termin4" name="termin4" value="<?php echo $thursday;?>" disabled>
                                    <input type="text" class="form-control" placeholder = "Aktivität" maxlength="100">
                                    <button type="submit" class="btn btn-success">Hinzufügen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Freitag -->
                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse5">Freitag, <?php echo $friday;?></a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <input type ="text" class="form-control" id="termin5" name="termin5" value="<?php echo $friday;?>" disabled>
                                    <input type="text" class="form-control" placeholder = "Aktivität" maxlength="100">
                                    <button type="submit" class="btn btn-success">Hinzufügen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Samstag -->
                <div class="col-xs-4">
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse6">Samstag, <?php echo $saturday;?></a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <input type ="text" class="form-control" id="termin6" name="termin6" value="<?php echo $saturday;?>" disabled>
                                    <input type="text" class="form-control" placeholder = "Aktivität" maxlength="100">
                                    <button type="submit" class="btn btn-success">Hinzufügen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--<input type="hidden" name="action" value="addActivity">-->

        </form>
    </div>

</main>

<?php

echo $this->footer;

?>
