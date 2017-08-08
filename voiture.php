<?php
require('vehicule.php');

class Voiture extends Vehicule{
	
	private $marque;

public  function  __construct($marque){
	$this->marque = $marque;
	
 	}

public function setMarque($marque){
	$this->marque = $marque;
}
public function getMarque(){
	return $this->marque;
}



public function avancer(){
		$this->passerLaVitesse(1);
		$avance = parent::avancer();
	}


public function passerLaVitesse($vitesse){
		echo "Je passe la vitesse $vitesse <br>";
	}

public function doubler($voiture){
		echo " Je double : $voiture";
	}


public function __tostring(){
		return " Cette voiture est de marque ".$this->marque."<br>";
	}

}

$voiture = new Voiture("Jaguar");
$voiture->avancer();
echo $voiture;

$voitureBMW = new Voiture("BMW");
echo $voitureBMW;

$voiture->doubler($voitureBMW);



?>