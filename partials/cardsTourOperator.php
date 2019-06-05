<?php




echo 
"
<div style='margin-top: 30px' class='col-sm-4'>
    <div class='card mb-4 shadow-sm text-center'>
        <h2 class='text-center'>" . $operators->getName() . "</h2>
            <div class='col-lg-12'> <hr>
            </div>
                <div class='card-body'>
                    <h1>" . $operators->getId() . "</h1>
                        <div class='col-lg-12'> <hr>
                        </div>
                    <p class='card-text text-center'>Prix : " . $operatorByDestination['price'] . "€</p>
                    <br>";
                    if ($review->getId_tour_operator() == $operators->getId()){
                        echo 
                        "
                        " . $review->getAuthor() . " | ". $review->getMessage() ." <br>
                        ";
                    }
                    "<br>
                    <h2>". $reviewByOperatorId['id_tour_operator'] ."</h2>
                        <div class='col-lg-12'>
                            <hr>
                        </div>
                    <div class='text-center'>
";
          
if ($operators->getIsPremium() == 1){
    echo 
    "
                       <form action='". $operators->getLink() ."' method=''>
                            <button type='sumbit' class='btn btn-success'>Voir le site</button>
                        </form>
    ";
}

echo
"
                    </div>
                </div>
    </div>
</div>
";


?>