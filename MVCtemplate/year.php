<?php

$view = new stdClass();
$view->pageTitle = 'Filter: Year';

require_once('Models/Database.php');
require_once('Models/DVDData.php');
require_once('Models/DVDDataSet.php');

if(isset($_POST['searchYear']))
{
    $dataSet = new DVDDataSet();
    $view -> DVDDataSet = $dataSet -> fetchAllDVDsByYear($_POST['year']);
    require_once('Views/dvd.phtml');
}
else
{
    require_once('Views/year.phtml');
}