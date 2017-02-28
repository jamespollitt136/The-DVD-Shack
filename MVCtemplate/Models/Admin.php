<?php require_once('Models/Database.php');

/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 07/01/16
 * Time: 12:54
 */
class Admin
{
    protected $_dbHandle;
    protected $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance ->getdbConnection();
        session_start();
    }

    public function getAdmin()
    {
        if(isset($_POST['adminSignIn']))
        {
            if(empty($_POST['adminName']) || empty($_POST['adminPass']))
            {
                echo "Please enter your username and password.";
            }
            else
            {
                $sqlQuery = "SELECT * FROM Administrator
                             WHERE Admin_Name='".$_POST['adminName']."'
                             AND Admin_Password='".sha1($_POST['adminPass'])."'";
                $statement = $this->_dbHandle ->prepare($sqlQuery);
                $statement -> execute(array(':adminName' => $_POST['adminName']));
                $result = $this->_dbHandle->prepare("SELECT FOUND_ROWS()");
                $result->execute();
                $row_count = $result->fetchColumn();
                if($row_count == 0)
                {
                    echo "Unable to log you in as something went wrong. Please try again.";
                }
                else
                {
                    $_SESSION['adminName'] = $_POST['adminName'];
                    echo 'Welcome Admin! You are now signed in as: '. $_SESSION['adminName'].'.';
                }
            }
        }
        if(isset($_POST['adminSignOut']))
        {
            session_destroy();
            echo "You have logged out";
            session_start();
        }
        return "";
    }
}