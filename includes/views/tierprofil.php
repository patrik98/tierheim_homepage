<?php
/**
 * Created by PhpStorm.
 * User: Patrik
 * Date: 21.04.2018
 * Time: 18:46
 */
echo $this->header;
?>
<div class="container-fluid" id="main-color">

    <!-- Thumbnails & Links zu den Tierprofilen -->
    <div class="row">
        <div class="col-xs-8 col-md-4">
            <div class="thumbnail">
                <img src="original/images/600x600.jpg" alt="" style="width:100%">
                <div class="caption">
                    <p>Bello, 10 Jahre alt, verspielt</p>
                </div>
            </div>
        </div>
        <div class="col-xs-0 col-md-8">
            <h2>Überschrift 2</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
    </div>

    <!-- Übersicht Aktivitäten -->

    <!-- Montag - Mittwoch -->
    <div class="row">

        <!-- Montag -->
        <div class="col-xs-4">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">Montag</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">*Aktivität hinzufügen*</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dienstag -->
        <div class="col-xs-4">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse2">Dienstag</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">*Aktivität hinzufügen*</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mittwoch -->
        <div class="col-xs-4">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse3">Mittwoch</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">*Aktivität hinzufügen*</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donnerstag - Samstag -->
    <div class="row">
        <!-- Donnerstag -->
        <div class="col-xs-4">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse4">Donnerstag</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">*Aktivität hinzufügen*</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Freitag -->
        <div class="col-xs-4">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse5">Freitag</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">*Aktivität hinzufügen*</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Samstag -->
        <div class="col-xs-4">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse6">Samstag</a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">*Aktivität hinzufügen*</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

echo $this->footer;

?>
