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
                    if ($review->getId_tour_operator() == $operators->getId()){
                        echo 
                        "
                        <div class='border-secondary border rounded'>" . $review->getAuthor() . " : ". $review->getMessage() ."</div> <hr>
                        ";
                    }
                    echo "


                    <form class='bordures' action='commentTourOp.php' method='POST'>
                    <div class='form-group'>
                    <input type='hidden' value='" . $operators->getName() . "' name='tourOp' />
                    <button type='submit' class='cta'>Laissez un commentaire !</button>
                    
                    </div>
                    </form>
                    <div class='circle float-right'>
                    <span class='circle_text'>" . $operatorByDestination['price'] . "€</span>
                   </div>
                   
                    

";






echo
"
                    </div>
                </div>
    </div>

";


?>