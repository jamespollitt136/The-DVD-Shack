<?php

require_once('Models/Database.php');

class Login
{
    protected $_dbHandle;
    protected $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
        session_start();
    }

    public function getUsers()
    {
        if(isset($_POST['signIn']))
        {
            if(empty($_POST['userName']) || empty($_POST['password']))
            {
                echo "Please enter your username and password.";
            }
            else
            {
//                $sqlQuery = "SELECT * FROM UserList WHERE Username= :userName AND Password='".sha1($_POST['password'])."'";

                $sqlQuery = "SELECT * FROM UserList WHERE Username='".$_POST['userName']."' AND Password='".sha1($_POST['password'])."'";
                $statement = $this -> _dbHandle -> prepare($sqlQuery);
                $statement -> execute(array(':userName' => $_POST['userName']));
                $result = $this->_dbHandle->prepare("SELECT FOUND_ROWS()");
                $result -> execute();
                $row_count = $result->fetchColumn();
                if($row_count == 0)
                {
                    echo "Unable to log you in as something went wrong. Please try again.";
                }
                else
                {
                    $_SESSION['userName'] = $_POST['userName'];
                    echo 'You are now signed in as: '. $_SESSION['userName']. '.';
                }
            }
        }
        if (isset($_POST['signOut']))
        {
            echo 'Logged out user:'. $_SESSION['userName'];
            unset($_SESSION['userName']);
            session_start();
        }
        return "";
    }
}