<?php


// OBJET MANAGER//
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

// Retourne toutes les destinations //
    public function getAllDestination()
    {
        $reponse = $this->bdd->query('SELECT * FROM destinations');
        $allDestinations = $reponse->fetchAll();
        return $allDestinations;
    }

// Retourne le/les opérateur.s pour une destination selectionnée //
    public function getOperatorByDestination($destination)
    {
        $reponse = $this->bdd->prepare('SELECT * FROM tour_operators
                                    INNER JOIN destinations
                                    WHERE  destinations.location = ?
                                            ');
        $reponse->execute(array(
            $destination
        ));
        $operatorByDestination = $reponse->fetch();
        return $operatorByDestination;
    }
// Crée une Review pour un opérateur //
    public function createReview($message, $author, $id_tour_operator)
    {
        $reponse = $this->bdd->prepare('INSERT INTO reviews (message, author, id_tour_operator)
                                        VALUES (?,?,?)
                                        ');
        $reponse->execute(array(
            $message,
            $author,
            $id_tour_operator
        ));
        
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

// Connexion bdd
$db = new PDO('mysql:host=127.0.0.1;dbname=ComparOperator', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.


$manager = new Manager($db);
$test = $manager->getOperatorByDestination('test');

// echo '<pre>' . var_export($test, true) . '</pre>';