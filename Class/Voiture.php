<?php
class Voiture{
	private $kilometrage;
	public $couleur;
	public $modele;
	public $marque;
	public $prix;
	public $nbreDeRevision;
	public $TableauLieu=array(
		"Belgique"=>1500,"Allemagne"=>2500,"Espagne"=>1000,"Portugal"=>3500,"Italie"=>4500
		);
public  function  __construct($mod,$marque,$couleur,$kilometrage,$prix,$nbreDeRevision){
 	$this->modele = $mod;
 	$this->marque = $marque;
 	$this->couleur = $couleur;
 	$this->kilometrage = $kilometrage;
 	$this->prix = $prix;
 	$this->nbreDeRevision = $nbreDeRevision;
 	}


 public function test(){
 		var_dump(get_object_vars($this));
 	}

public function setKilometrage($kilometrage){
	$this->kilometrage += $kilometrage;
}
public function getKilometrage(){
	return $this->kilometrage;
}
public function seDeplacer($lieu){
	//print_r($this->TableauLieu);
	echo " je vais en/au $lieu et je vais parcourir : ";
	foreach ($this->TableauLieu as $key => $value) {
		if($key == $lieu )
				{
					echo "$value kms <br>";
					$this->setKilometrage($value);
				}
		}
	}
public function revision(){
	if ( $this->getKilometrage() > 15000){
		return true;
	}	
	else{
			return false;
		}
	}
public function kilometreDeTrop(){
	//if () on considère que les revisions précédentes ont déjà été faites 
	return $this->getKilometrage() % (15000)  ;
}	
public function __tostring(){
	return "Modèle : ".$this->modele.", marque : ".$this->marque.", couleur : ".$this->couleur." avec un kilometrage de : ".$this->kilometrage." kms et un prix de : ".$this->prix." $ <br>";
}
}
// $voiture1 = new Voiture("Lunaire","Jaguar","Emeraude","150","2000000","5");
// echo $voiture1;
// echo "<br>";
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Belgique");$voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Allemagne");
// $voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Espagne");
// $voiture1->seDeplacer("Portugal");
// $voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Italie");
// $voiture1->seDeplacer("Belgique");
// $voiture1->seDeplacer("Italie");
// if ( $voiture1->revision())
// {
// 	echo " >> Il faut passer au garage pour une révision <br>";
// 	echo "on devrait avoir fait la révision il y a déja ".$voiture1->kilometreDeTrop()." kms ";
// }
// else{
// 	echo " >> C'est bon on peut encore rouler <br>";
// }
// echo $voiture1;

$test = new Voiture("Lunaire","Jaguar","Emeraude","150","2000000","5");
//echo "$test";echo "<br>";
echo "<br>";
//var_dump(get_object_vars($test));
echo "<br>";
$test->test();
echo "<br>";
$myArray = $test;
$myArrayJsonEncoded = json_encode($myArray);
echo "<br>";
echo "<br>";


echo ($myArrayJsonEncoded);

echo "<br>";
echo "<br>";
$implodeArray = explode(',',$myArrayJsonEncoded);
var_dump($implodeArray);
foreach ($implodeArray as $key => $value) {
	echo $key ." => " .$value ."<br>";
}

?>