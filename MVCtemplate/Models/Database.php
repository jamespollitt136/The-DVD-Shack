<?php
/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 15/12/15
 * Time: 15:22
 */
class Database
{
    /**
     * @var Database, PDO
     */
    protected static $_dbInstance = null;
    protected $_dbHandle;

    public static function getInstance()
    {
        $username ='sta302';
        $password = 'Fosters2003';
        $host = 'helios.csesalford.com';
        $dbName = 'sta302_ssp';
        if(self::$_dbInstance === null)
        {
            self::$_dbInstance = new self($username, $password, $host, $dbName);
        }
        return self::$_dbInstance;
    }

    public function __construct()
    {
        $username ='sta302';
        $password = ''; // password removed
        $host = 'helios.csesalford.com';
        $dbName = 'sta302_ssp';
        try
        {
            $this->_dbHandle = new PDO("mysql:host=$host;dbname=$dbName", $username, $password); // creates the database handle with connection info
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function getdbConnection()
    {
        return $this->_dbHandle;
    }

    public function __destruct()
    {
        $this->_dbHandle = null;
    }
}
