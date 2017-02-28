<?php
/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 08/01/16
 * Time: 10:17
 */

require_once('Models/Database.php');
require_once('Models/DVDData.php');
require_once('Models/DVDDataSet.php');

$view = new stdClass();
$view->pageTitle = 'Filter: Cast';

if(isset($_POST['searchCast']))
{
    $dataSet = new DVDDataSet();
    $view -> DVDDataSet = $dataSet -> fetchAllDVDsByCast($_POST['castName']);
    require_once('Views/dvd.phtml');
}
else
{
    require_once('Views/cast.phtml');
}

?>