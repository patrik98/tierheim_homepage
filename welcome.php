<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Selbsterstellte Ressourcen -->
    <link rel="stylesheet" href="css/style.css"/>
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
            <a class="navbar-brand" href="index.php">Tierheim</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Über uns</a></li>
                <li><a href="#">Tiere</a></li>
                <li><a href="#">Hilf uns!</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#signUp">Registrieren</button>
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#login">Login</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
</div>
<p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>