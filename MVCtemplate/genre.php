<?php

$view = new stdClass();
$view->pageTitle = 'Filter: Genre';

require_once('Models/Database.php');
require_once('Models/DVDData.php');
require_once('Models/DVDDataSet.php');

if(isset($_POST['searchGenre']))
{
    $dataSet = new DVDDataSet();
    $view -> DVDDataSet = $dataSet -> fetchAllDVDsByGenre($_POST['genre']);
    require_once('Views/dvd.phtml');
}
else
{
    require_once('Views/genre.phtml');
}