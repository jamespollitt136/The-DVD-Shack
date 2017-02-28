<?php require_once('Models/Database.php');
/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 08/01/16
 * Time: 12:07
 */

class BasketDataSet
{
    //protected $_dbHandle;
    //protected $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database ::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function addToBasket($name, $price)
    {
        echo "Adding item to basket";
        $sqlQuery = "INSERT INTO Basket(DVD_Name, Price)
                      VALUES('".$name."', '".$price."')";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement -> execute();
        return "Added";
    }

}