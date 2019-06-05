<?php




echo 
"
<div style='margin-top: 30px' class='col-sm-4'>

    <div class='card mb-4 shadow-sm text-center'>
        <h2 class='text-center'>" . $operators->getName() . "</h2><div class='grade'>";
        if ($operators->getGrade() != 0) {
            for ($i = 0; $i < $operators->getGrade(); $i++) {
                echo '<i class="fas fa-star"></i>  ';
            }
        }
        echo "
        
        </div>
            <div class='col-lg-12'> <hr>
            
            </div>
                <div class='card-body'>
                   
                    
                    <div class='col-lg-12'> <hr>
                        </div>
                    <p class='card-text text-center'>Prix : " . $operatorByDestination['price'] . "€</p>
                    <hr>";
                    if ($review->getId_tour_operator() == $operators->getId()){
                        echo 
                        "
                        <p>" . $review->getAuthor() . " à dit : ". $review->getMessage() ."</p> <br>
                        ";
                    }
                    echo "


                    <form class='bordures' action='' method=''>
                    <div class='form-group'>
                      <label for='exampleInputEmail1'>Pseudo</label>
                      <input name='author' type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Pseudo'>
                    </div>
                    <div class='form-group'>
                      <label for='exampleInputPassword1'>Message</label>
                      <input name='message' type='text' class='form-control' id='exampleInputPassword1' placeholder='Message'>
                    </div>
                    <button type='button' class='btn btn-success'>Valider</button>
                    </form>






";
          
if ($operators->getIsPremium() == 1){
    echo 
    "
                       <form action='". $operators->getLink() ."' method=''><br>
                       <button type='button' class='btn btn-secondary btn-lg btn-block'>Voir le site</button>
                        </form>
    ";
}




echo
"
                    </div>
                </div>
    </div>

";


?>