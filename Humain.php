<?php
var_dump(Humain::class);
class Humain
{
    public $taille = 175;
    public $nom;

    private $secret;
    public function __construct(
        string $nomDeFamille
    )
    {
        echo "Je suis né.e \n";
        echo $this->nom = $nomDeFamille."\n";
    }

    public function __destruct()
    {
        echo "Je suis mort.e \n";
    }

    public function marcher()
    {
        echo "Je marche";
    }

    public function maTaille()
    {
       echo $this->taille+1;
    }

    function setSecret(string $secret)
    {
        $this->secret = $secret;
    }

    function getSecret()
    {
        return $this->secret;
    }
}
$constance = new Humain('nomdefamilleConstance');
$marcelline = new Humain('nomdefamilleMarcelline');
$constance->setSecret("Je suis la phrase secret : de Constance \n");
echo $constance->getSecret();
unset($constance);