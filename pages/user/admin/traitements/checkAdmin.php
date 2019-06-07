<?php 

// vérification admin //

    $motDePasseQuiAeteEnvoye = $_POST['mdp'];
   
    if ($motDePasseQuiAeteEnvoye != 'elodie') {
        header('Location: ../../admin/?error=1');
        die;
    } else {
        header('Location: ../../admin/sessionAdministrateur.php');
    }