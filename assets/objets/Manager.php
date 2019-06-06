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
        $reponse = $this->bdd->query('SELECT * FROM destinations WHERE id_tour_operator = 10');
        $allDestinations = $reponse->fetchAll();
        return $allDestinations;
    }

// Retourne le/les opérateur.s pour une destination selectionnée //
    public function getOperatorByDestination(string $destination)
    {
        $reponse = $this->bdd->prepare('SELECT * FROM tour_operators
                                    INNER JOIN destinations
                                    WHERE  destinations.location = ?
                                    AND destinations.id_tour_operator = tour_operators.id
                                    AND tour_operators.id != 10
                                            ');
        $reponse->execute(array(
            $destination
        ));
        $operatorByDestination = $reponse->fetchAll();
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

// Retourne  le/les review.s pour un opérateur selectionné //
    public function getReviewByOperatorId($id_tour_operator)
    {
        $reponse = $this->bdd->prepare('SELECT * FROM reviews WHERE id_tour_operator = ?');
        $reponse->execute(array(
            $id_tour_operator
        ));
        $getReviewByOperatorId = $reponse->fetchAll();
        return $getReviewByOperatorId;
    }

// // Retourne toutes les destinations //
// public function getAllDestination()
// {
//     $reponse = $this->bdd->query('SELECT * FROM destinations WHERE id_tour_operator = 10');
//     $allDestinations = $reponse->fetchAll();
//     return $allDestinations;
// }


    // Retourne tout les opérateurs //
    public function getAllOperator()
    {
        $reponse = $this->bdd->query('SELECT * FROM tour_operators 
                                      WHERE id != 10');
            $allOperators = $reponse->fetchAll();
             return $allOperators;
    }

// Update un opérateur selectionné en premium //
    public function updateOperatorToPremium($id_tour_operator)
    {
        $reponse = $this->bdd->prepare('UPDATE tour_operators
                                        SET is_premium = 1
                                        WHERE id = ?');
        $reponse->execute(array(
            $id_tour_operator
        ));
    }

// Update un opérateur selectionné en non-premium //
    public function updateOperatorToNoPremium($id_tour_operator)
    {
    $reponse = $this->bdd->prepare('UPDATE tour_operators
                                    SET is_premium = 0
                                    WHERE id = ?');
    $reponse->execute(array(
        $id_tour_operator
    ));
}

// Crée un opérateur //
    public function createTourOperator($name, $grade, $link)
    {
        $reponse = $this->bdd->prepare('INSERT INTO tour_operators (name, grade, link)
                                        VALUES (?,?,?)
                                        ');
        $reponse->execute(array(
            $name,
            $grade,
            $link
        ));
    }

// POUR ELODIE : Crée une Destination //
    public function createDestination($destination, $prix, $id_tour_operator)
    {
        $reponse = $this->bdd->prepare('INSERT INTO destinations (location, price, id_tour_operator)
                                        VALUES (?,?,?) 
                                         ');
        $reponse->execute(array(
            $destination,
            $prix,
            $id_tour_operator
        ));                             
    }
public function selectIdbyOperator(){

}
}



