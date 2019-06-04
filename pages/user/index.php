<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ComparOperator</title>

  <?php require('../../partials/links.php'); ?>
  <?php require('../../assets/bdd/bdd.php'); ?>



</head>

<body>

  <?php
  include('../../partials/header.php');
  include('../../assets/objets/Manager.php');
  include('../../assets/objets/Destination.php');

  // $manager = new Manager($db);
  // $test = $manager->getAllDestination2();

  $manager = new Manager($db);
  $test = $manager->getOperatorByDestination('test');

  // echo '<pre>' . var_export($test, true) . '</pre>';

  ?>

<div class="row">
  <?php
//   foreach ($test as $test) {
//     $destinations = new Destination($test['id'], $test['location'], $test['price'], $test['id_tour_operator'], $test['imgPath'],$test['description']);
    
//     include('../../partials/cards.php');

//  }

  // foreach ($test as $test) {
  //   $destinations = new Destination($test['id'], $test['location'], $test['price'], $test['id_tour_operator'], $test['imgPath']);
  //   // echo '<pre>' . var_export($destinations, true) . '</pre>';


 
  // ?>
</div>








  <?php include('../../partials/footer.php'); ?>


</body>
<?php require('../../partials/scripts.php'); ?>

</html>