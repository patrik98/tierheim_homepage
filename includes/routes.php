<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');

$route['/tiere'] = array('controller' => 'IndexController', 'uniqueName' => 'tiere');
$route['/tiere.html'] = array('controller' => 'IndexController', 'uniqueName' => 'tiere');

$route['/tierprofil'] = array('controller' => 'TierprofilController', 'uniqueName' => 'tiere');
$route['/tierprofil.html'] = array('controller' => 'TierprofilController', 'uniqueName' => 'tiere');

$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/register'] = array('controller' => 'SignUpController', 'uniqueName' => 'register');
$route['/register.html'] = array('controller' => 'SignUpController', 'uniqueName' => 'register');
$route['/register.php'] = array('controller' => 'SignUpController', 'uniqueName' => 'register');
$route['/registrieren'] = array('controller' => 'SignUpController', 'uniqueName' => 'register');

?>

