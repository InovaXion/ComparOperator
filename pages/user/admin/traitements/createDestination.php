<?php

require('../../../../assets/bdd/bdd.php');
include('../../../../assets/objets/Manager.php');
include('../../../../assets/objets/Destination.php');
include('../../../../assets/objets/TourOperator.php');
include('../../../../assets/objets/Review.php');

$manager = new Manager($db);



$location = $_POST['location'];
$price = $_POST['price'];
$tourOpName = $_POST['tourOp'];
$idTourOp = $manager->getIdByOperatorName($tourOpName);


$manager->createDestination($location, $price, $idTourOp);


header('Location: ../sessionAdministrateur.php?success=2');