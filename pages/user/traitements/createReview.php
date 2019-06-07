<?php
require('../../../assets/bdd/bdd.php');
include('../../../assets/objets/Manager.php');
include('../../../assets/objets/Destination.php');
include('../../../assets/objets/TourOperator.php');
include('../../../assets/objets/Review.php');

$manager = new Manager($db);

$id_tour_operator = $_POST['getIdofTourOp'];
$message = $_POST['review'];
$author = $_POST['author'];

$destination = $_POST['destination'];
$imgPath = $_POST['imgPath'];


$manager->createReview($message,$author,$id_tour_operator);


header('Location: ../index.php');