<?php
/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 08/01/16
 * Time: 12:48
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('Models/Database.php');
require_once('Models/ReturnBasket.php');

$view = new stdClass();
$view->pageTitle = 'Basket';

$returnBasket = new ReturnBasket();
$view->returnBasket = $returnBasket->returnBasket();

require_once('Views/basket.phtml');
