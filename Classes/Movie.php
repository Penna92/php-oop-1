<?php

class Movie
{
    protected $title;
    protected $genre;
    protected $date;
    protected $original_language;
    private $price;

    function __construct($title, $genre, $date, $original_language)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->date = $date;
        $this->original_language = $original_language;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getOriginal_Language()
    {
        return $this->original_language;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($_price)
    {
        return $this->price = $_price;
    }
}
