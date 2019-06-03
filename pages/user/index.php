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

  <?php include('../../partials/header.php'); ?>





  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Le domaine de Ker-Ys</h5>
      <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
      <p class="card-text">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
      <a href="#" class="btn btn-primary">Voir l'offre</a>
    </div>
  </div>



  <?php include('../../assets/objets/Manager.php');
  include('../../assets/objets/Destination.php');

  $manager = new Manager($db);
  $test = $manager->getAllDestination();

  echo '<pre>' . var_export($test, true) . '</pre>';


  foreach ($test as $test) {
    $destinations = new Destination($test['id'], $test['location'], $test['price'], $test['id_tour_operator'], $test['imgPath']);
    echo '<pre>' . var_export($destinations, true) . '</pre>';
    
  }
  ?>












  <?php include('../../partials/footer.php'); ?>


</body>
<?php require('../../partials/scripts.php'); ?>

</html>