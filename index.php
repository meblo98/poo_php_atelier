<?php
require_once "voiture.php";
require_once "moto.php";


// Création de l'objet bassine de la classe Voiture
$bassine = new Voiture(" Toyota", " Prado", " 00km", 2020, " Rose");

// On appelle la fonction affiche_detail
$bassine->affiche_detail();
$bassine->klaxonner();
$bassine->demarrer();
$bassine->setMarque("bmw");
$bassine -> reparer();

$motoelectronique = new moto(" scooter", " Yamaha", " 50 000 ", 2024, " Noir");
$motoelectronique->peintre();


// On appelle la fonction affiche_detail