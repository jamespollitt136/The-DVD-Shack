<?php

require_once('Models/Login.php');

$view = new stdClass();
$view->pageTitle = 'Log In';

require_once('Views/login.phtml');

$login = new Login();
$view->login = $login->getUsers();

?>
