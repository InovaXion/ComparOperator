<?php


class Destination
{
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function getPrice()
    {
        
    }
    public function getId_tour_operator()
    {
        
    }
}