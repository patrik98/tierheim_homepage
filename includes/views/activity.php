<?php

echo $this->header;

?>

    <div class="container-fluid">
            <div class="row">
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
                <div class="col-xs-12 col-md-10 col-lg-8">
                    <h1 id="h1-modified">Aktivitaet hinzufuegen</h1>
                </div>
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
            </div>

            <div class="row">
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
                <div class="col-xs-0 col-md-10 col-lg-8">

                    <form method="post" class="form-horizontal" id="activityForm" action="activity">

                        <?php if ($this->ActivityAdded ==  true): ?>
                            <div class="col-xs-0 col-md-1 col-lg-2"></div>
                            <div class="col-xs-12 col-md-10 col-lg-8" style="text-align: center">
                                <h4 class="alert alert-success">
                                    Die Aktivität wurde erfolgreich hinzugefügt.
                                </h4>
                            </div>
                            <div class="col-xs-0 col-md-1 col-lg-2"></div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2"><h2>Tier:</h2></label>
                            <div class="inputWithIcon">
                                <select class="form-control" id="tier" name="tier">
                                <?php foreach($this->tiere as $tier):?>
                                    <option value="<?php echo $tier->tierid;?>"><?php echo $tier->name;?></option>
                                <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="termin"><h2>Termin:</h2></label>
                            <div class="inputWithIcon">
                                <input type="date" class="form-control" id="termin" name="termin"
                                       required>
                                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-12 col-md-2" for="bezeichnung"><h2>Aktivität:</h2></label>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="bezeichnung" name="bezeichnung" placeholder="Aktivität"
                                       maxlength="100">
                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div>
<!--
                        <div class="form-group">
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" id="nutzerid" name="nutzerid" value="<?php echo $this->userid; ?>">
                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-pull-2 col-xs-12 col-md-pull-2">
                                <button class="button" type="submit">
                                    Hinzufügen </button>

                            <input type="hidden" name="action" value="activity">
                        </div>
                    </form>

                </div>
                <div class="col-xs-0 col-md-1 col-lg-2"></div>
            </div>
    </div>



<?php

echo $this->footer;

?>