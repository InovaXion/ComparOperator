
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
 $imgPath = $_POST['imgPath'];
 

  $manager = new Manager($db);
  $operatorsByDestination = $manager->getOperatorByDestination($destination);

  ?>
<?php
//Le carousel //
 echo "
 <div class='container bordure'>
  <div class='row shadow-lg align-items-center padding'>
    <div class='col-sm-4 text-center'>
    </div>
     <div class='col-sm-12 image2'>
         <!--Titre-->
         <h2 class='text-center titre'>" . $destination . "</h2>
     </div>
     <div class='col-sm-12 text-center'>
         <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
             <div class='carousel-inner'>
                 <div class='carousel-item active'>
                     <img class='d-block w-50' src='../../assets/images/carousel/" . $imgPath . "1.jpg' alt='First slide'>
                 </div>
                 <div class='carousel-item'>
                     <img class='d-block w-50' src='../../assets/images/carousel/" . $imgPath . "2.jpg' alt='Second slide'>
                 </div>
                 <div class='carousel-item'>
                     <img class='d-block w-50' src='../../assets/images/carousel/" . $imgPath . "3.jpg' alt='Third slide'>
                 </div>
             </div>
             <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                 <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                 <span class='sr-only'>Previous</span>
             </a>
             <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                 <span class='carousel-control-next-icon' aria-hidden='true'></span>
                 <span class='sr-only'>Next</span>
             </a>
         </div>
     </div>
 </div>";

?>
            <div class="row">
<?php

$manager = new Manager($db);
$operatorsByDestination = $manager->getOperatorByDestination($destination);

// Les cards // 
foreach ($operatorsByDestination as $operatorByDestination) {

    $reviewsByOperatorId = $manager->getReviewByOperatorId($operatorByDestination['0']);

    $operators = new TourOperator($operatorByDestination['0'], $operatorByDestination['name'], $operatorByDestination['grade'], $operatorByDestination['link'], $operatorByDestination['is_premium']);

    foreach($reviewsByOperatorId as $reviewByOperatorId){
      $review = new Review($reviewByOperatorId['id'], $reviewByOperatorId['message'], $reviewByOperatorId['author'], $reviewByOperatorId['id_tour_operator']);
    }
    include('../../partials/cardsTourOperator.php');
 }

  ?>
            
</div>
</div>

<div></div>





<?php include('../../partials/footer.php'); ?>

<?php require('../../partials/scripts.php'); ?>


</body>
</html>