<?php


class Destination
{
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;

    public function __construct()
    {
        
    }

    public function getId()
    {
        
    }
    public function getLocation()
    {
        
    }
    public function getPrice()
    {
        
    }
    public function getId_tour_operator()
    {
        
    }
}

$test = new Destination($db);

echo '<pre>' . var_export($test->getAllDestination(), true) . '</pre>';
