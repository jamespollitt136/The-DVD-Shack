<?php

$view = new stdClass();
$view->pageTitle = 'Filter: Price';

require_once('Models/Database.php');
require_once('Models/DVDData.php');
require_once('Models/DVDDataSet.php');

if(isset($_POST['searchPrice']))
{
    $dataSet = new DVDDataSet();
    $view -> DVDDataSet = $dataSet -> fetchAllDVDsByPrice($_POST['price']);
    require_once('Views/dvd.phtml');
}
else
{
    require_once('Views/price.phtml');
}