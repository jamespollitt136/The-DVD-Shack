<?php

require_once('Models/Database.php');
require_once('Models/DVDData.php');
require_once('Models/DVDDataSet.php');

$view = new stdClass();
$view->pageTitle = 'Filter: Director';

if(isset($_POST['searchDirector']))
{
    $dataSet = new DVDDataSet();
    $view -> DVDDataSet = $dataSet -> fetchAllDVDsByDirector($_POST['directorName']);
    require_once('Views/dvd.phtml');
}
else
{
    require_once('Views/director.phtml');
}