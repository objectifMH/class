<?php
include "phrases.php";

class Document{
	public $titre;
	public $phrases = array();


public function setTitre($titre){
	$this->titre = $titre;
}

public function getTitre(){
	return $this->titre ;
}

public function  __construct($titre){
	$this->titre = $titre;
	}

public function addPhrase($phrase){
	$this->phrases[] = $phrase;
}




public function __tostring(){
	$aff=" >>   [".$this->titre."]<br>";
	foreach ($this->phrases as $key => $value) {
		$aff .= $value->__tostring();
	}
	$aff.="    <br>";
	return $aff;
}	

}

$document = new Document("doc.txt");
//var_dump($document);
echo "<br>";
//var_dump($phrase1);
$document->addPhrase($phrase1);
//var_dump($document);
echo $document;
echo "<br>";
$phrase2 = new Phrase("Marco","part","à la rivière");
$document->addPhrase($phrase2);
echo $document;
echo "<br>";
$phrase3 = new Phrase("jean-luc","mange","de la glace");
$document->addPhrase($phrase3);
echo $document;
echo "<br>";
$phrase3->setComplement("au cinéma");
$document->addPhrase($phrase3);
echo $document;
echo "<br>";
$document->setTitre("Le petit prince.csv");
echo $document;
echo "<br>";

$newTitre =  $document->getTitre();
echo $newTitre;echo "<br>";

echo "<br>";
$document->addPhrase(new Phrase("je","suis","dans l'avion"));
echo $document;

$documentClone = $document;
echo $documentClone;

$document->setTitre("Le petit prince sur Mars.csv");
echo $document;
echo $documentClone;



?>