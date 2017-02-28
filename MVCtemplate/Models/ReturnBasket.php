<?php
require_once('Models/Database.php');
require_once('Models/BasketData.php');
/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 08/01/16
 * Time: 12:28
 */

class ReturnBasket
{
    protected $_dbHandle;
    protected $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function returnBasket()
    {
        $sqlQuery = 'SELECT * FROM Basket';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];

        while ($row = $statement->fetch())
        {
            $dataSet[] = new BasketData($row);
        }
        return $dataSet;
    }
}