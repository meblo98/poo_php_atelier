<?php

class Vehicule{

    public function demarrer()
    {
        echo "faut demarrer<br/>";
    }
}

interface IReparable{
    public function reparer();

}


class Voiture extends Vehicule implements IReparable {

    // Propriétés
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;
    private $couleur;

    // Constructeur
    public function __construct($marque, $modele, $kilometrage, $annee, $couleur)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->annee = $annee;
        $this->couleur = $couleur;
    }

    public function reparer(){
        echo "à reparer <br/>";
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function klaxonner() 
    {
        echo "la voiture klaxonne <br/>";
    }

    // Fonction pour afficher les détails de la voiture
    public function affiche_detail()
    {
        echo "voici les details de la voiture" . "<br/><br/>";
        echo "Marque : " . $this->marque . "<br/>";
        echo "Modèle : " . $this->modele . "<br/>";
        echo "Kilométrage : " . $this->kilometrage . "<br/>";
        echo "Année : " . $this->annee . "<br/>";
        echo "Couleur : " . $this->couleur . "<br/>";        
    }

}

// Création de l'objet bassine de la classe Voiture
$bassine = new Voiture(" Toyota", " Prado", " 00km", 2020, " Rose");

// On appelle la fonction affiche_detail
$bassine->affiche_detail();
$bassine->klaxonner();
$bassine->demarrer();
$bassine->setMarque("bmw");
$bassine -> reparer();
class moto extends vehicule{
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $kilometrage;
    public function __construct($marque, $modele, $kilometrage, $annee, $couleur)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->annee = $annee;
        $this->couleur = $couleur;
    }
    public function peintre(){
        echo "à peintre <br/>";
    }
}
$motoelectronique = new moto(" scooter", " Yamaha", " 50 000 ", 2024, " Noir");
$motoelectronique->peintre();


// On appelle la fonction affiche_detail