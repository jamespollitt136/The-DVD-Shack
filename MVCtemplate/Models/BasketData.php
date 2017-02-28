<?php

/**
 * Created by PhpStorm.
 * User: sta302
 * Date: 08/01/16
 * Time: 12:31
 */
class BasketData
{
    protected $ID;
    protected $dvdName;
    protected $price;

    public function __construct($dbRow)
    {
        $this->ID = $dbRow['ID'];
        $this->dvdName = $dbRow['DVD_Name'];
        $this->price = $dbRow['Price'];
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getDVDName()
    {
        return $this->dvdName;
    }

    public function getPrice()
    {
        return $this->price;
    }
}