<?php
define('FPDF_FONTPATH','font/');

include "phrases.php";
require('fpdf.php');


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
	$aff=" >>   [".$this->titre."]".PHP_EOL;
	foreach ($this->phrases as $key => $value) {
		$aff .= $value->__tostring();
	}
	$aff.="    ".PHP_EOL;
	return $aff;
}	


public function DocutmentToPdf(){
	$lignes = 10;
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',24);
	$pdf->SetTextColor(255,0,0);

	$pdf->Write(15,"[".$this->titre."]".PHP_EOL );
	$lignes=$lignes+15;
	foreach ($this->phrases as $key => $value) {
		$pdf->SetTextColor($lignes+50,$lignes,255-$lignes);
		$pdf->SetFont('Times','I',17);
		$value = utf8_decode($value); // pour palier a l'encodage utf-8
		$pdf->Write(7, $value);
		$lignes=$lignes+15;
	}
	$pdf->Output();

}

}

$document = new Document("doc.txt");
//var_dump($document);
		//echo "<br>";
//var_dump($phrase1);
$document->addPhrase($phrase1);
//var_dump($document);
		//echo $document;
		//echo "<br>";
$phrase2 = new Phrase("Marco","part","à la rivière");
$document->addPhrase($phrase2);
		//echo $document;
		//echo "<br>";
$phrase3 = new Phrase("jean-luc","mange","de la glace");
$document->addPhrase($phrase3);
		//echo $document;
		//echo "<br>";
$phrase3->setComplement("au cinéma");
$document->addPhrase($phrase3);
		//echo $document;
		//echo "<br>";
$document->setTitre("Le petit prince.csv");
		//echo $document;
		//echo "<br>";

$newTitre =  $document->getTitre();
		//echo $newTitre;echo "<br>";

		//echo "<br>";
$document->addPhrase(new Phrase("je","suis","dans l'avion"));
		//echo $document;

$documentClone = $document;
		//echo $documentClone;

$document->setTitre("Le petit prince sur Mars.csv");
		//echo $document;
		//echo $documentClone;
$pdfDocument = $document->__tostring();


$phrase4 = new Phrase("toto-luc","mange","de la glace");
$document->addPhrase($phrase4);
$phrase5 = new Phrase("tita","mange","de la glace");
$document->addPhrase($phrase5);
$phrase6 = new Phrase("tonton","mange","de la glace");
$document->addPhrase($phrase6);
$phrase7 = new Phrase("Marie-Laure","chante","de la glace");
$document->addPhrase($phrase7);
$phrase8 = new Phrase("Artemis","mange","de la glace");
$document->addPhrase($phrase8);
$phrase9 = new Phrase("jean-luc","ouvre","de la glace");
$document->addPhrase($phrase9);
$phrase10 = new Phrase("jean-luc","mange","de la glace");
$document->addPhrase($phrase10);
$phrase11 = new Phrase("jean-luc","mange","de la glace");
$document->addPhrase($phrase11);
$phrase12 = new Phrase("Elise","part","en avion");
$document->addPhrase($phrase12);
$phrase13 = new Phrase("jean-luc","mange","de la glace");
$document->addPhrase($phrase13);
$phrase14 = new Phrase("élodie","va","à la maison");
$document->addPhrase($phrase14);
$phrase15 = new Phrase("jean-luc","part","à la rivière");
$document->addPhrase($phrase15);



$document->DocutmentToPdf();

// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10, );
// $pdf->Output();


?>