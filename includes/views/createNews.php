<?php echo $this->header; ?>

<div class="container">
    <div class="row">
        <form method = "post" class="form-horizontal col-xs-12">

            <div class="form-group">
                <label class="col-xs-12" for="email">Überschrift</label>
                <div class="col-xs-12">
                    <input type="text" class="form-control" id="ueberschrift" name="ueberschrift" placeholder="Überschrift hier eingeben (max. 50 Zeichen)">
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-12" for="email">Text:</label>
                <div class="col-xs-12">
                    <input type="textarea" class="form-control" id="inhalt" name="inhalt" placeholder="Text hier eingeben (max. 2000 Zeichen)">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Veröffentlichen</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php echo $this->footer; ?>
