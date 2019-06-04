<?php 
echo "
<div class='col-sm-4'>
  <div class='card mb-4 shadow-sm text-center'>
    <h2 class='text-center'>" . $test['location'] . "</h2>
    <div class='col-lg-12'>
        <hr>
    </div>
    <div class='card-body'>
      <img src='../../assets/images/" . $test['imgPath'] . ".jpg' class='img-fluid' alt='Responsive image'>
      <div class='col-lg-12'>
        <hr>
    </div>
          <p class='card-text text-center'>" . $test['description'] . "</p>
          <div class='col-lg-12'>
        <hr>
    </div>
          <div class='text-center'>
          
            
<form action='toursOpForDestination.php' method='POST'>
<input type='hidden' value='" . $test['id'] . "' name='idDestination' />
<button type='submit' class='btn btn-success'>Voir les Opérateurs pour cette destination</button>  
</form>      
          </div>
    </div>
  </div>
</div>";
?>
