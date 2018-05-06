<?php echo $this->header; ?>
<div class="container-fluid">
    <!-- Reihe für immer zentrierte Überschrift -->
    <div class="row" id="main-color">
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
           <br><br>
        </div>
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
    </div>

    <div class="row" id="main-color">
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <!-- Google-Maps Ansicht -->
            <div style="background-color: #46b29d">
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2691.1766005352965!2d12.171479215411974!3d47.583806979183144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4776375b00761d89%3A0x7b6312b5d056ce32!2sFH+Kufstein+Tirol!5e0!3m2!1sde!2sat!4v1524562727467">
                </iframe>
        </div>


        <div class="row">
            <div class="col-xs-0 col-md-1 col-lg-2"></div>
                        <div class="col-xs-12 col-md-10 col-lg-8">
                            <div class="row">
                        <h1 style="margin-left: 1px">Kontakt</h1>
                        <address id="infotext">
                            Tierheim Tirol<br>
                            Andreas-Hofer-Straße 7<br>
                            6330 Kufstein<br>
                            Österreich<br>
                            <br>

                            <i class="fa fa-phone"></i> 01234 567 890<br>
                            <i class="glyphicon glyphicon-envelope"></i> kontakt@tierheimabc.com
                        </address>
                            </div>
                        </div>
                    </div>
    </div>
                    <div class="col-xs-0 col-md-1 col-lg-2"></div>
            </div><!-- /.container-fluid -->
            <?php echo $this->footer; ?>
