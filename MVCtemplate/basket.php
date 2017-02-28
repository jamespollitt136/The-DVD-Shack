<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require_once('Models/Database.php');
require_once('Models/BasketDataSet.php');

$view = new stdClass();
$view->pageTitle = 'Basket';

$dvdName = $_GET['name'];
$dvdPrice = $_GET['price'];

if($dvdName == "" || $dvdPrice == "")
{
    echo 'error';
}
else
{
    $dataSet = new BasketDataSet();
    $view->BasketDataSet = $dataSet->addToBasket($dvdName, $dvdPrice);
}
header("Location: return.php");
?>