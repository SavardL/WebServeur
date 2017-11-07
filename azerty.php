<?php

class Movie {
    
    private $title= null ;
    private $description='une descritpion' ;
    private $duration=120 ;
    private $language='';
    private $type='';
    
    public function getTitle()
    {
        return $this->title;   
    }
    
    public function setTitle($title = "")
    {
        $this->title = $title;
    }
    
     public function getDescritpion()
    {
        return $this->description;   
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    public function __construct($title = "")
    {
        $this->title = $title;
    }
    
}

$movie = new Movie ("Mon film");

echo $movie->getTitle();


class Session {
    public $start='';
    public $end='';
}