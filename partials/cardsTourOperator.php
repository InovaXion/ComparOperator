<?php
echo 
"
<div style='margin-top: 30px' class='col-sm-4'>
    <div class='card mb-4 shadow-sm text-center'>
    
    

        <h2 class='text-center'>" . $operators->getName() . "</h2><div class='grade'>";
            // Affiche le nbs d'étoiles s'il y en a //
            if ($operators->getGrade() != 0) {
                for ($i = 0; $i < $operators->getGrade(); $i++) {
                    echo '<i class="fas fa-star"></i>  ';
                }
            }
            if ($operators->getIsPremium() == 1){
             echo 
             "
                <p>PREMIUM</p>
             ";
        } else {
            echo 
            "
            <p>STANDARD</p>

            ";
        }
        echo "
        
        </div>
            <div class='col-lg-12'> <hr>";
                    
if ($operators->getIsPremium() == 1){
    echo 
    "
                       <form action='". $operators->getLink() ."' method=''>
                       <button type='submit' class='btn btn-secondary btn-lg btn-block'>Découvrir</button>
                        </form>
    ";
} else {
    echo 
    "
    <button type='button' class='btn btn-dark btn-lg btn-block'>Pas de site</button>
    ";
}
echo "</div>
                <div class='card-body'>
                    <div class='col-lg-12'>
                        </div>
                   
                    <hr>";

                    // Affiche tout les 3 derniéres reviews propre à l'opérateur //
                            foreach($reviewsByOperatorId as $reviewByOperatorId){
                            $review = new Review($reviewByOperatorId['id'], $reviewByOperatorId['message'], $reviewByOperatorId['author'], $reviewByOperatorId['id_tour_operator']);

                                echo 
                        "
                        <div class='border-secondary border rounded'>". $review->getAuthor() ." : ". $review->getMessage() ."</div> <hr>
                        ";}
                    
                    echo "<div class='portfolio-item item float-left'>

                    <a class='portfolio-link' data-toggle='modal' href='#portfolioModal". $operators->getId() ."'>
                        <div class='portfolio-hover'>
                            <div class='portfolio-hover-content'>
                                <i class='fas fa-plus fa-3x'></i>
                            </div>
                        </div>
                        <img class='img-fluid' src='' alt=''>
                    </a>
                  </div>


                    
                    <div class='circle float-right'>
                    <span class='circle_text'>" . $operatorByDestination['price'] . "€</span>
                   </div>
                </div>
                </div>
    </div>

";

echo "
<div class='portfolio-modal modal fade' id='portfolioModal". $operators->getId() ."' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='close-modal' data-dismiss='modal'>
          <div class='lr'>
            <div class='rl'></div>
          </div>
        </div>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-8 mx-auto'>
              <div class='modal-body'>
                <!-- Project Details Go Here -->
                <h2 class='text-uppercase'>". $operators->getName() ."</h2>
                <form class='bordures' action='traitements/createReview.php' method='POST'>
                    <div class='form-group'>
                    <input style='width:300px' type='textarea' name='author' value='' placeholder='Pseudo'/>
                    <input style='width:300px;height:200px' type='text' name='review' value='' placeholder='Message'/>
                    <input type='hidden' value='" . $destination . "' name='destination'/>
                    <input type='hidden' value='" . $imgPath . "' name='imgPath'/>
                    <input type='hidden' value='" . $operators->getName() . "' name='tourOpName'/>
                    <input type='hidden' value='" . $operators->getId() . "' name='getIdofTourOp' />

                    <button type='submit' class='cta'>Envoyer</button>
                    
                    </div>
                    </form>
               
                <button class='btn btn-secondary' data-dismiss='modal' type='button'>
                  <i class='fas fa-times'></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
?>