<?php
var_dump(Humain::class);
class Humain
{
    public $taille = 175;
    public $nom;

    public function __construct(
        string $nom
    )
    {
        $this->nom = $nom;
        echo "Je suis né.e \n";
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

}
$constance = new Humain('constance');
$marcelline = new Humain('marcelline');
$marcelline->maTaille();
unset($constance);