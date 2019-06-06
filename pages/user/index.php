<!DOCTYPE html>
<html lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ComparOperator</title>

  <?php require('../../partials/links.php'); ?>
  <?php require('../../assets/bdd/bdd.php'); ?>



</head>
<body>

  <?php
  include('../../partials/header.php');
  // Les objets  //
  include('../../assets/objets/Manager.php');
  include('../../assets/objets/Destination.php');
  include('../../assets/objets/TourOperator.php');
  include('../../assets/objets/Review.php');



  $manager = new Manager($db);
  $destinations = $manager->getAllDestination();

  ?>
<hr>
<div class="row">

  <?php
  foreach ($destinations as $destination) {

    $destination = new Destination($destination['id'], $destination['location'], $destination['price'], $destination['id_tour_operator'], $destination['imgPath'], $destination['description']);
    
    include('../../partials/cardsDestination.php');

 }

  ?>

 
</div>









<?php include('../../partials/footer.php'); ?>

<?php require('../../partials/scripts.php'); ?>


</body>
</html>