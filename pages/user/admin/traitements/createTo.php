<?php


require('../../../../assets/bdd/bdd.php');
include('../../../../assets/objets/Manager.php');
include('../../../../assets/objets/Destination.php');
include('../../../../assets/objets/TourOperator.php');
include('../../../../assets/objets/Review.php');




$manager = new Manager($db);

$name = $_POST['name'];
$grade = $_POST['grade'];
$link = $_POST['link'];

$manager->createTourOperator($name, $grade, $link);


header('Location: ../?success=1');