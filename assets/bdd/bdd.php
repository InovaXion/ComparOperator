<?php
// Connexion bdd
$db = new PDO('mysql:host=127.0.0.1;dbname=Luxury_Compare_Operator;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.