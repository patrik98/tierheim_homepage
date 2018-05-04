<!DOCTYPE html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Character-Set -->
    <meta charset="UTF-8">

    <!-- Änderung des angezeigten Tab-Titels je nach Seite -->
    <title><?php echo $this->title; ?></title>

    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Selbsterstelltes CSS -->
    <link rel="stylesheet" href="css/main.css"/>
</head>

<body>

<header>
    <!-- Ein-/Ausblenden von Registrieren, Login und Logout-Buttons wenn angemeldet oder nicht -->
    <?php if(LOGGED_IN == false):?>
    <a href="login"><button type="button" class="btn btn-default btn-sm" id="turquoise">Login</button></a>
    <a href="register"><button type="button" class="btn btn-default btn-sm" id="white">Registrieren</button></a>
        <img src="images/header.png" class="inner"/>
    <?php else: ?>
        <a href="logout"><button type="button" class="btn btn-default btn-sm" id="turquoise">Logout</button></a>
        <img src="images/header.png" class="inner"/>
    <?php endif; ?>
</header>

<nav class="navbar navbar-default" id="main">
    <div class="container-fluid">
        <!-- Burger-Button bei mobile Ansicht -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Navigationslinks die mobil zusammengefasst werden -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Setzen der "active"-Klasse bei aktueller Seite -->
                <li <?php if($this->current == "index"): ?>class="active"<?php endif; ?>><a href="index">Ueber uns</a></li>
                <li <?php if($this->current == "tiere"): ?>class="active"<?php endif; ?>><a href="tiere">Tiere</a></li>
                <li <?php if($this->current == "hilf_uns"): ?>class="active"<?php endif; ?>><a href="hilf_uns">Hilf uns!</a></li>
                <li <?php if($this->current == "kontakt"): ?>class="active"<?php endif; ?>><a href="kontakt">Kontakt</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!-- /.navbar -->