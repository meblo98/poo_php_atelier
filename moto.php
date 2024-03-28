<?php

require_once "vehicule.php";


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