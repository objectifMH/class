<?php
class Phrase{
	public $sujet='martin';
	public $verbe='va';
	public $complement='à la plage';


public  function  __construct($sujet,$verbe){
 	$this->sujet = $sujet;
 	$this->verbe = $verbe;
 	}
public function setComplement($complement){
	$this->complement = $complement;
}


public function mettre_pluriel($sujet,$verbe,$complement){
		if ($this->sujet == "Je" ){
			$this->sujet = "Nous";
		}
		if ($this->sujet == "Nous" ){
			$this->verbe = "allons";
		}
	}	
	
public function affiche_phrase(){
	//echo $this->sujet." ".$this->verbe." ".$this->complement."<br>";
	return $this->sujet." ".$this->verbe." ".$this->complement."<br>";
	}

public function __tostring(){
	return $this->sujet." ".$this->verbe." ".$this->complement."<br>";
}


}


//$phrase = new Phrase();
//$text = $phrase->affiche_phrase();

$phrase1 = new Phrase("Je","vais");
//echo $phrase1;

//var_dump($phrase1);
echo "<br>";
$text = $phrase1->affiche_phrase();
//echo $text;
//echo  $phrase1->affiche_phrase();


$phrase1->mettre_pluriel("je","vais","au cinema");
echo  $phrase1->affiche_phrase();





?>