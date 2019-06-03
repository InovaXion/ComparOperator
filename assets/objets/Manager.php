<?php

// Connexion bdd
$db = new PDO('mysql:host=127.0.0.1;dbname=ComparOperator', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.


// test
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
        $reponse = $this->bdd->query('SELECT * FROM tour_operator
                                    INNER JOIN destinations
                                    WHERE destination.id_tour_operator = tour_operator.id
                                            ');
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

$manager = new Manager($db);

echo '<pre>' . var_export($manager->getAllDestination(), true) . '</pre>';
