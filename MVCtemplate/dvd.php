<?php

require_once('Models/Database.php');
require_once('Models/DVDDataSet.php');
require_once('Models/DVDData.php');

$view = new stdClass();
$view->pageTitle = 'All DVDs';

$DVDDataSet = new DVDDataSet();
$view->DVDDataSet = $DVDDataSet -> fetchAllDVDs();


require_once('Views/dvd.phtml');