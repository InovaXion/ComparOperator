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
  $test = $manager->updateOperatorToNoPremium(1);


  // echo '<pre>' . var_export($test, true) . '</pre>';

  // foreach ($test as $test) {
  //   $destinations = new Destination($test['id'], $test['location'], $test['price'], $test['id_tour_operator'], $test['imgPath']);
  // echo '<pre>' . var_export($destinations, true) . '</pre>';


  // foreach ($test as $test) {
  //   $destinations = new Destination($test['id'], $test['location'], $test['price'], $test['id_tour_operator'], $test['imgPath']);
  //   // echo '<pre>' . var_export($destinations, true) . '</pre>';


  // }
  
  ?>







  <div class="row">

    <!-- // CARD // -->
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>


        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <!-- // END CARD // -->

    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>
        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>
        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>
        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>
        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>
        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>


        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>


        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>


        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-4 shadow-sm text-center">
        <h2 class="text-center">Le domaine de Ker-Ys</h2>
        <div class="col-lg-12">
          <hr>
        </div>


        <div class="card-body">
          <img src="https://www.camping-ledomainedekerys.fr/wp-content/uploads/sites/14/2016/04/camping-st-nic-vue-aerienne.jpg" class="img-fluid" alt="Responsive image">
          <p class="card-text text-center">Une situation exceptionnelle dans la baie de Douarnenez ! </p>
          <div class="text-center">
            <a href="toursOpForDestination.php" class="btn btn-success">Voir l'offre</a>
          </div>
        </div>
      </div>
    </div>

  </div>









  <?php include('../../partials/footer.php'); ?>


</body>
<?php require('../../partials/scripts.php'); ?>

</html>