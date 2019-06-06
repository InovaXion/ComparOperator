<?php

require('../../../../assets/bdd/bdd.php');
include('../../../../assets/objets/Manager.php');
include('../../../../assets/objets/Destination.php');
include('../../../../assets/objets/TourOperator.php');
include('../../../../assets/objets/Review.php');




$manager = new Manager($db);


$tourOpName = $_POST['tourOp'];
$idTourOp = $manager->getIdByOperatorName($tourOpName);


if ($_POST['premium'] == 'oui'){
    $manager->updateOperatorToPremium($idTourOp);
} else {
    $manager->updateOperatorToNoPremium($idTourOp);
}

header('Location: ../?success=3');