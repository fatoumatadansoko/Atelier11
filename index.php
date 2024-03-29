<?php
interface IReparable{
    public function reparer();
}

//Création de la classe voiture
class Voiture extends Vehicule implements IReparable{
 protected $Marque;
 protected $Modele;
 protected $Kilometrage;
 protected $Annee;

 public function reparer()
 {
  echo" on peut réparer toutes les voitures";
 }
 //méthode construct pour initialisé les propriétés de la classe

 public function __construct($marque_voiture,$modele_voiture, $kilometrage_voiture, $annee_voiture,){
    $this->Marque = $marque_voiture;

    $this->Modele = ($modele_voiture);
    $this->Kilometrage = ($kilometrage_voiture);
    $this->Annee = ($annee_voiture);


}
   
//utilisation des méthodes get et set pour afficher et avoir la possibilité de modifier après
 public function getMarque(){
    return $this-> Marque;
 }

 public function setMarque($nouveau_marque){
     $this->Marque = $nouveau_marque;
 }
 public function getModele(){
    return $this-> Modele;
 }
 public function setModele($nouveau_modele){
     $this->Modele = $nouveau_modele;
 }
 public function getKilometrage(){
    return $this-> Kilometrage;
 }
 public function setKilometrage($nouveau_kilometrage){
     $this->Kilometrage = $nouveau_kilometrage;
 }
 
 public function getAnnee(){
    return $this-> Annee;
 }
 public function setAnnee($nouveau_annee){
     $this->Annee = $nouveau_annee;
 }
 

 public function Afficher(){
    return var_dump("C'est une voiture $this->Marque,de modele $this->Modele,qui a $this->Kilometrage KM/H ,qui a était fabriquer en $this->Annee<br>");    
}
 
}
 class Vehicule{
    private $Marque;
    private $Modele;
    private $Kilometrage;
    private $Annee;

    public function __construct($Marque,$Modele,$Kilometrage,$Annee){
        // parent::__construct($Marque,$Modele,$Kilometrage,$Annee);
    $this ->Marque=$Marque;
    $this ->Modele=$Modele;
    $this ->Kilometrage=$Kilometrage;
    $this ->Annee=$Annee;
      
}
    public function demarrer(){
    return var_dump("C'est une vehicule $this->Marque, de modele $this->Modele, qui a $this->Kilometrage KM/H, qui a été fabriquée en $this->Annee<br>"); 
      }  
      public function Klaxonner(){
        return var_dump("C'est une vehicule $this->Marque, de modele $this->Modele, qui a $this->Kilometrage KM/H, qui a été fabriquée en $this->Annee et elle klaxonne beaucoup"); 
          }   
}

class moto extends Vehicule{
    

}

 //la création des des instances   
   
$Voiture = new voiture("BMW","X5",280, 2015);

$Voiture -> Afficher();

$Vehicule= new Vehicule("mercedes","maybach",320,2015);

$Vehicule->demarrer();

$Voiture1= new Vehicule("Ford","Jaguar",300,2018);

$Voiture1->Klaxonner();

$moto = new moto("YAMAHA","SWZ", 120, 2010);

?>


