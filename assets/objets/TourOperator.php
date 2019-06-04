<?php 

class TourOperator
{
    private $id;
    private $name;
    private $grade;
    private $link;
    private $is_premium;

    function __construct($id,$name,$grade,$link,$is_premium)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
        $this->link = $link;
        $this->is_premium = $is_premium;
    }

    function getId()
    {
        return $this->id;
    }
    
    function getName()
    {
        return $this->name;

    }

    function getGrade()
    {
        return $this->grade;

    }

    function getLink()
    {
        return $this->link;

    }

    function getIsPremium()
    {
        return $this->is_premium;

    }






}