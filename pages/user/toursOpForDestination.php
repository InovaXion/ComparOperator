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


 $destination = $_POST['destination'];
  $manager = new Manager($db);
  $test = $manager->getOperatorByDestination($destination);

  ?>

<div class="row">
  <?php
  foreach ($test as $test) {
  $reviews = $manager->getReviewByOperatorId($test['id']);

    $operators = new TourOperator($test['id'], $test['name'], $test['grade'], $test['link'], $test['is_premium']);
    echo '<pre>' . var_export($reviews, true) . '</pre>';
    
    foreach($reviews as $review)
    {
      $test2 = new Review($review['id'], $review['message'], $review['author'], $review['id_tour_operator']);
    echo '<pre>' . var_export($review['message'], true) . '</pre>';
      
    }
    include('../../partials/cardsTourOperator.php');

 }

  ?>

 
</div>



    </div>






<?php include('../../partials/footer.php'); ?>

<?php require('../../partials/scripts.php'); ?>


</body>
</html>