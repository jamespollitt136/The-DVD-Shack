<?php

require_once('Models/Register.php');

$view = new stdClass();
$view->pageTitle = 'Sign Up';

$register = new Register();
$view->register = $register->register();

require('Views/register.phtml');
?>