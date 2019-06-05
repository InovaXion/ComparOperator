<?php




echo "<div class='col-sm-4'>
  <div class='card mb-4 shadow-sm text-center'>
    <h2 class='text-center'>" . $test['name'] . "</h2>
    <div class='col-lg-12'>
        <hr>
    </div>
    <div class='card-body'>
     <h1>" . $test['id'] . "</h1>
      <div class='col-lg-12'>
        <hr>
    </div>
          <p class='card-text text-center'>Prix : " . $test['price'] . "€</p>
          <br>
          <h2>". $review['message'] ."</h2>
          <br>
          <h2>". $review['id_tour_operator'] ."</h2>
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