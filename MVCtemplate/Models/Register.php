<?php require_once('Models/Database.php');

class Register
{
    public function __construct()
    {
        //empty
    }

    public function register()
    {
        if (isset($_POST['signUp']))
        {
            require_once('Models/Database.php');
            $db = new Database();

            if(empty($_POST['nameUser']) || empty($_POST['pass']) || empty($_POST['address'])
                ||  empty($_POST['city']) ||empty($_POST['mobile']) && is_numeric($_POST['mobile']))
            {
                echo 'There are important fields missing data. Please fill the form out completely';
            }
            else
            {
                $sqlQuery = "INSERT INTO UserList(Username, Password, Address, City, Mobile)
                              VALUES ('" . $_POST['nameUser'] . "','" .sha1($_POST['pass']) . "'
                                      ,'" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['mobile'] . "');";
                $statement = $db->getdbConnection()->prepare($sqlQuery);
                $statement->execute();
                echo 'sign up complete';
            }
        }
        return "You are now signed up";
    }
}
?>