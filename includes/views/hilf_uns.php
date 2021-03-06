<?php echo $this->header ?>

<!-- Content-Container -->
<div class="container-fluid">
    <!-- Reihe für immer zentrierte Überschrift-->
    <div class="row">
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
            <h1>Helfen & Spenden</h1>
        </div>
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
    </div>

    <!-- Hilfe-Infos -->
    <div class="row">
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                <img class="img-responsive img-rounded pull-right" style="margin-left: 15px" src="images/hund_hilfmit.png"/>
                <p>Eine <a href="register" style="font-weight: bold">Mitgliedschaft</a> auf
                unserer Website ermöglicht Ihnen, mit unsereren Tieren verschiedene Aktivitäten durchzuführen - sei es das Gassi gehen 
                mit einen unserer liebenswürdigen Hunde oder das bloße Kuscheln unserer streichelbedürftigen Katzen - wir sind für jede 
                Unterstützung sehr dankbar. Falls Ihnen dies dennoch zu wenig sein sollte: Noch heute können Sie mit einem kleinen 
                Geldbetrag dazu beitragen, Tierleben zu retten. Ohne Ihre Hilfe ist es uns nicht möglich, alle Tiere zu verpflegen. 
                Ohne Sie schaffen wir es nicht, unser Heim auszubauen, um weitere Tiere aufzunehmen und sie von der Gefahr, der sie vorher 
                ausgesetzt waren, zu befreien. In der Vergangenheit konnten wir bereits durch die großzügige Unterstützung unserer Spenderinnen 
                und Spender tägliche Futterkosten, Verpflegung und Bereitstellen von Räumlichkeiten für unsere Schutztieren ermöglichen.
                Kein Betrag ist zu wenig, keine Hilfe zu dürftig - wir freuen uns über jede einzelne Spende und Hilfe
                </p>
            </div>
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
    </div>

    <!-- Spenden-Infos -->
    <div class="row">
    <div class="col-xs-0 col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
            <h1 style="margin-left: 0.5px">Spendenkonto</h1>
            <p id="infotext"> Tierheim Tirol <br>
            Sparkasse Kufstein <br>
            <strong>IBAN: </strong>AT01 2345 6789 0000 2708 <br>
            <strong>BIC: </strong>SPKUAT22XXX</p>

        <button type="submit" style="border: 0; background: transparent">
            <img src="images/Spendenbutton.png" width="170" height="60" alt="submit" />
        </button>
            <br><br><br>
        </div>
        <div class="col-xs-0 col-md-1 col-lg-2"></div>
    </div>
</div>
<!-- /.container-fluid -->

<?php echo $this->footer ?>