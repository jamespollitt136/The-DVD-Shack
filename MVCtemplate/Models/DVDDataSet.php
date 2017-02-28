<?php

require_once('Models/Database.php');
require_once('Models/DVDData.php');

class DVDDataSet
{
    protected $_dbHandle;
    protected $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllDVDs()
    {
        $sqlQuery = 'SELECT * FROM DVDList';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch())
        {
            $dataSet[] = new DVDData($row);
        }
        return $dataSet;
    }

    public function fetchAllDVDsByDirector($directorName)
    {
        $sqlQuery = "SELECT * FROM DVDList WHERE Director = :directorName";
        $result = $this -> _dbHandle -> prepare($sqlQuery);
        $result -> execute(array(':directorName' => $directorName));
        $dataSet = array();

        while($row = $result->fetch())
        {
            $dataSet[] = new DVDData($row);
        }
        return $dataSet;
    }

    public function fetchAllDVDsByDVD($dvdName)
    {
        $sqlQuery = "SELECT * FROM DVDList WHERE DVD_Name = :dvdName";
        $result = $this -> _dbHandle -> prepare($sqlQuery);
        $result -> execute(array(':dvdName' => $dvdName));
        $dataSet = array();

        while($row = $result->fetch())
        {
            $dataSet[] = new DVDData($row);
        }
        return $dataSet;
    }

    public function fetchAllDVDsByGenre($genre)
    {
        $sqlQuery = "SELECT * FROM DVDList WHERE Genre = :genre";
        $result = $this -> _dbHandle -> prepare($sqlQuery);
        $result -> execute(array(':genre' => $genre));
        $dataSet = array();

        while($row = $result->fetch())
        {
            $dataSet[] = new DVDData($row);
        }
        return $dataSet;
    }

    public function fetchAllDVDsByYear($year)
    {
        $sqlQuery = "SELECT * FROM DVDList WHERE Year = :year";
        $result = $this -> _dbHandle -> prepare($sqlQuery);
        $result -> execute(array(':year' => $year));
        $dataSet = array();

        while($row = $result-> fetch())
        {
            $dataSet[] = new DVDData($row);
        }
        return $dataSet;
    }

    public function fetchAllDVDsByPrice($price)
    {
        $sqlQuery = "SELECT * FROM DVDList WHERE Price = :price";
        $result = $this -> _dbHandle -> prepare ($sqlQuery);
        $result -> execute(array(':price' => $price));
        $dataSet = array();

        while($row = $result -> fetch())
        {
            $dataSet[] = new DVDData(($row));
        }
        return $dataSet;
    }

    public function fetchAllDVDsByCast($cast)
    {
        $sqlQuery = "SELECT * FROM DVDList WHERE Cast = :cast";
        $result = $this -> _dbHandle -> prepare ($sqlQuery);
        $result -> execute(array(':cast' => $cast));
        $dataSet = array();

        while($row = $result -> fetch())
        {
            $dataSet[] = new DVDData(($row));
        }
        return $dataSet;
    }
}
