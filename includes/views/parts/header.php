<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Über uns</title>
    <!-- Bootstrap Ressourcen -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Selbsterstellte Ressourcen -->
    <link rel="stylesheet" href="css/main.css"/>

    <?php if($this->current == 'login'): ?>
    <script type="text/javascript" src="js/login_alt.js"></script>
    <?php endif; ?>
</head>

<body>
<div><img src="images/600x200.jpg" style="width: 100%; height: 100px;"/></div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index">Tierheim</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li  <?php if($this->current == "index"): ?>class="active"<?php endif; ?>><a href="index">Über uns</a></li>
                <li <?php if($this->current == "tiere"): ?>class="active"<?php endif; ?>><a href="tiere">Tiere</a></li>
                <li><a href="#">Hilf uns!</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <a href="register"><button type="button" class="btn btn-default btn-sm">Registrieren</button></a>
                <a href="login"><button type="button" class="btn btn-default btn-sm">Login</button></a>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>