<?php

class Homme extends Humain
{
    public $force = 2;
}

class Femme extends Humain
{
    public function faireEnfant()
    {
        echo "Oui, je veux enfanter.";
    }
}

class Humain
{
    public $taille = 175;
    public $nom;

    public $force = 1;

    private $secret;
    public function __construct(
        string $nomDeFamille
    )
    {
        #echo "Je suis né.e \n";
        echo $this->nom = $nomDeFamille."\n";
    }

    public function __destruct()
    {
        #echo "Je suis mort.e \n";
    }

    public function marcher()
    {
        echo "Je marche ".$this->nom."\n";
    }

    // Taille +1
    public function maTaille()
    {
       echo $this->taille+1;
    }

    // Getter Setter $secret phrase
    public function setSecret(string $secret)
    {
        $this->secret = $secret;
    }

    public function getSecret()
    {
        return $this->secret;
    }


}
$constance = new Femme('CONSTANCE');
$marcelline = new Femme('MARCELLINE');
$adam = new Homme('ADAM');
#$constance->setSecret("Je suis la phrase secret : de Constance \n");
#echo $adam->marcher();
#echo "La force de ".$marcelline->nom." est de : ".$marcelline->force."\n";
#echo "\n";
#echo "La force de ".$adam->nom." est de : ".$adam->force;
#echo "\n";
echo $marcelline->faireEnfant();
// impossible car il n'hérite pas de la class Femme ou ce trouve la méthode
#echo $adam->faireEnfant();

