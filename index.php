<?php
class Voiture{

    // Propriétes
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;
    private $couleur;

    //constructeur
    public function __construct($marque, $modele, $kilometrage, $annee,$couleur)
    {
        $this -> marque = $marque;
        $this -> modele = $modele;
        $this -> kilometrage = $kilometrage;
        $this -> annee = $annee;
        $this -> couleur = $couleur;
    }

    // fonction afficher les details de voiture
    public function affiche_detail()
    {
        echo "Marque : ".$this -> marque."<br/>";
        echo "modele : ".$this -> modele."<br/>";
        echo "kilometrage : ".$this -> kilometrage."<br/>";
        echo "annee : ".$this -> annee."<br/>";
        echo "couleur : ".$this -> couleur;        
        
    }
}

    // Création de l'objet bassine de la classe Voiture
$bassine = new Voiture("Toyota", "Prado", "0km",2020, "Rose");

// on va appelé la fonction affice detail
$bassine -> affiche_detail();

