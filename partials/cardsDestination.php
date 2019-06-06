<?php 
echo "
<div class='col-sm-4'>
  <div class='card mb-4 shadow-sm text-center'>
    <h2 class='text-center'>" . $destination->getLocation() . "</h2>
    <div class='col-lg-12'>
        <hr>
    </div>
    <div class='card-body'>
      <img src='../../assets/images/" . $destination->getImgPath() . ".jpg' class='img-fluid' alt='Responsive image'>
      <div class='col-lg-12'>
        <hr>
    </div>
          <p class='card-text text-center'>" . $destination->getDescription() . "</p>
          <div class='col-lg-12'>
        <hr>
    </div>
          <div class='text-center'>
          
            
<form action='toursOpForDestination.php' method='POST'>
<input type='hidden' value='" . $destination->getLocation() . "' name='destination' />
<input type='hidden' value='" . $destination->getImgPath() . "' name='imgPath' />
<button type='submit' class='btn btn-secondary'>Voir les Opérateurs pour cette destination</button>  
</form>      
          </div>
    </div>
  </div>
</div>";
?>
