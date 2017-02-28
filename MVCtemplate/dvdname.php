<?php

$view = new stdClass();
$view->pageTitle = 'Filter: DVD Name';


require_once('Models/Database.php');
require_once('Models/DVDData.php');
require_once('Models/DVDDataSet.php');


if(isset($_POST['searchDVD']))
{
    $dataSet = new DVDDataSet();
    $view -> DVDDataSet = $dataSet -> fetchAllDVDsByDVD($_POST['dvdName']);
    require_once('Views/dvd.phtml');
}
else
{
    require_once('Views/dvdname.phtml');
}