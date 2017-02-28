<?php

class DVDData
{
    protected $dvdName;
    protected $directorName;
    protected $genre;
    protected $year;
    protected $price;
    protected $synopsis;
    protected $photo;
    protected $secondary_photo;
    protected $third_photo;
    protected $fourth_photo;

    public function __construct($dbRow)
    {
        $this->dvdName = $dbRow['DVD_Name'];
        $this->directorName = $dbRow['Director'];
        $this->genre = $dbRow['Genre'];
        $this->year = $dbRow['Year'];
        $this->price = $dbRow['Price'];
        $this->synopsis = $dbRow['Synopsis'];
        $this->photo = $dbRow['Photo_Name'];
        $this->secondary_photo = $dbRow['Secondary_Photo'];
        $this->third_photo = $dbRow['Third_Photo'];
        $this->fourth_photo = $dbRow['Fourth_Photo'];
    }

    public function getDVDName()
    {
        return $this->dvdName;
    }

    public function getDirector()
    {
        return $this->directorName;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getSecondPhoto()
    {
        return $this->secondary_photo;
    }

    public function getThirdPhoto()
    {
        return $this->third_photo;
    }

    public function getFourthPhoto()
    {
        return $this->fourth_photo;
    }
}