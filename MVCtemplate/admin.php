<?php require_once('Models/Admin.php');
setcookie('adminName', $_POST['adminName'], time()+3600);
setcookie('adminPass', $_POST['adminPass'], time()+3600);
/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 07/01/16
 * Time: 12:43
 */

$view = new stdClass();
$view->pageTitle = 'Admin Log In';

require_once('Views/admin.phtml');

$admin = new Admin();
$view->login = $admin->getAdmin();

?>
