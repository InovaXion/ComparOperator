<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ComparOperator</title>

  <link rel="stylesheet" href="../../../assets/css/style.css">
  <link rel="stylesheet" href="../../../assets/css/header.css">
  <link rel="stylesheet" href="../../../assets/css/footer.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <?php require('../../../assets/bdd/bdd.php'); ?>



</head>

<body>

  <?php

  // Les objets  //
  include('../../../assets/objets/Manager.php');
  include('../../../assets/objets/Destination.php');
  include('../../../assets/objets/TourOperator.php');
  include('../../../assets/objets/Review.php');
  ?>
  <div class="header">

    <a href="index.php" class="logo"><img id="logo" src="../../../assets/images/logo.png" alt="logo"></a>


    <div class="header-right">
      <h1>Compare Operator </h1>
      <a href="../index.php">Accueil</a>
      <a href="#messages">Messages</a>
      <a href="#profil">Profil</a>
      <a href="#inscription">Administration</a>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Rechercher</button>
      </form>

    </div>
  </div>

  <div class="container vertical-align center size-100-prc">
    <div class="rounded bg-light-grey flex columns width-500-px">
      <div class="bg-purple rounded-top vertical-align center height-100-px width-600-prc relative">
        <div class="circle absolute vertical-align center bottom-0-px left-0-px bg-purple-complement size-110-px margin-left-20-px margin-bottom-20-px">
          <i class="icon-white fas fa-users fa-3x"></i>
        </div>
        <div class="vertical-align title-text">

          <?php
          if (isset($_GET['error'])) {

            if ($_GET['error'] == 1) {
              echo "<p>Error Authentification</p>";
            }
          } else {
            echo "Authentification";
          }

          ?>
        </div>
      </div>
      <div class="content vertical-align center size-100-prc">
        <div class="vertical-align center columns width-75-prc height-100-prc">

          <form method="POST" action="traitements/checkAdmin.php">
            <input name="mdp" type="password" class="custom-input margin-bottom-40-px margin-top-40-px height-60-px width-80-prc padding-10-px font-input" placeholder="Mot de passe" />
            <button type="submit" class="vertical-align center title-text width-100-prc height-80-px rounded-light bg-purple-complement margin-bottom-40-px">Suivant</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php include('../../../partials/footer.php'); ?>

  <script src="../../../assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/8f54a4528c.js"></script>

</body>

</html>