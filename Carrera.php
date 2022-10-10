
<?php

require 'Corredor.php';
ini_set('display_errors', 1);

class Carrera extends Corredor{

private $corredores=[];

public function __constructor( $nom, $codigo, $segs){
    


}



public function anadirCorredor(){

    
//$Corredor1->getCodigo();

}



}



$segs=[5];
$Corredor1= new Corredor("Gorka", 34, $segs);
$Corredor1->anadirCarrera(99);
$Corredor1->anadirCarrera(33);
$Corredor1->anadirCarrera(85);
$Corredor1->getNom();
$Corredor1->setNom("Setter puesto");
$Corredor1->getNom();
$Corredor1->vaciarCarreras();







?>