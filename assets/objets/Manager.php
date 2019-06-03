<?php


// OBJET MANAGER
class Manager {
    private $bdd;

    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function setDb(PDO $db)
    {
      $this->bdd = $db;
    }

    public function getAllDestination()
    {
        $reponse = $this->bdd->query('SELECT * FROM destinations');
        $allDestinations = $reponse->fetchAll();
        return $allDestinations;
    }

    public function getOperatorByDestination()
    {
        $reponse = $this->bdd->query('SELECT * FROM tour_operators
                                    INNER JOIN destinations
                                    WHERE destinations.id_tour_operator = tour_operators.id
                                            ');
        $operatorByDestination = $reponse->fetchAll();
        return $operatorByDestination;
    }

    public function createReview()
    {

    }

    public function getReviewByOperatorId()
    {

    }

    public function getAllOperator()
    {

    }

    public function updateOperatorToPremium()
    {

    }
    
    public function createTourOperator()
    {

    }
}
