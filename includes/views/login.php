<?php

echo $this->header;

?>
    <div class="wrapper login">
        <h2>Login</h2>
        <p>If you want to <a href="#" class="loginOverlay">login please click here</a>.</p>
        <!--<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>-->


    </div>

    <!-- Modal Login-->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Login</h3>
                </div>
                <div class="modal-body">
                    <form action="/tierheim_homepage/login" method="post">
                        <div class="form-group">
                            <label for="email">E-Mail-Adresse:</label>
                            <input type="email" class="form-control" id="email2" name="email2">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passwort:</label>
                            <input type="password" class="form-control" id="pwd2" name="pwd2">
                        </div>
                        <!--<div class="checkbox">
                            <label><input type="checkbox"> eingeloggt bleiben</label>
                        </div> Version 1.1 -->
                        <input type="hidden" name="action" value="login">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Einloggen</button>
                </div>
            </div>

        </div>
    </div>
<?php

echo $this->footer;

?>