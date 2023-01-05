<?php


trait Bipede
{
    public function courrir() : void
    {
        echo "Je cours !";
    }
}

interface Mammifere
{
    public function pilosite(): string;
}




abstract class Humain implements Mammifere
{
    use Bipede;
    public int $taille = 175;
    public string $nom;

    public int $force = 1;

    private string $secret;

    public static int $population = 0;
    public function __construct(
        string $nomDeFamille
    )
    {
        echo self::$population++;
        #echo "Je suis né.e \n";
        echo $this->nom = $nomDeFamille."\n";
    }

    public function __destruct()
    {
        echo self::$population--;
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

    // implematation Mammifere

    public function pilosite(): string
    {
        return "J'ai du poil";
    }

}

class Homme extends Humain
{
    #public $force = 2;
}

class Femme extends Humain
{
    public function faireEnfant()
    {
        echo "Oui, je veux enfanter.";
    }

    public function pilosite(): string
    {
        return "J'ai moins de poil que l'homme";
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
#echo $marcelline->faireEnfant();
// impossible car il n'hérite pas de la class Femme ou ce trouve la méthode
#echo $adam->faireEnfant();
// Instancier avec Abstract



#$newHumain = new Humain();
echo $marcelline->courrir()." ".$marcelline->nom;
// affichage pilosite
echo $marcelline->nom.$marcelline->pilosite();
echo "\n".$adam->nom.$adam->pilosite();