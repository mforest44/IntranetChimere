<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of projet
 *
 * @author Maxime
 */
class projet {
   public $nom;
   public $description;
   public $tempsEstime;
   public $coutEstime;
   public $nomClient;
   public $statut;
   public $type;
   
   public function __construct($nom,$description,$tempsEstime,$coutEstime,
           $nomClient,$statut,$type) {
       $this->nom=$nom;
       $this->description=$description;
       $this->tempsEstime=$tempsEstime;
       $this->coutEstime=$coutEstime;
       $this->nomClient=$nomClient;
       $this->statut=$statut;
       $this->type=$type;
       
   }
   
   public function enregistrer() {
$pdo = new PDO("mysql:host=".config::SERVERNAME
                .";dbname=" . config::DBNAME
                , config::USER
                , config::PASSWORD);

$req=$pdo->prepare("INSERT into projetbijoux"
                ." (Nom,Description,TpsEstime,EstimationCout,Client,Statut,Type) values "
                ."(:nom,:description,:tempsEstime,:coutEstime,:nomClient,:statut,:type);");

        $req->bindParam(":description", $this->description);        
        $req->bindParam(":nom", $this->nom);
        $req->bindParam(":tempsEstime", $this->tempsEstime);
        $req->bindParam(":coutEstime", $this->coutEstime);
        $req->bindParam(":nomClient", $this->nomClient);
        $req->bindParam(":statut", $this->statut);
        $req->bindParam(":type", $this->type);
$req->execute();
$pdo=null;
}

public static function getAll () {
    $pdo = new PDO("mysql:host=".config::SERVERNAME
                .";dbname=" . config::DBNAME
                , config::USER
                , config::PASSWORD);

    $req=$pdo->prepare ("select * from projetbijoux");
    $req->execute();
    
    if ($req->rowCount() >=1) 
    {
        $projets=array();
        while($ligne =$req->fetch())
        {
        $projets[] = new projet ($ligne["Nom"], $ligne["Description"],$ligne["TpsEstime"],
                $ligne ["EstimationCout"],$ligne["Client"],$ligne["Statut"],
                $ligne["Type"]);
        }
        
        return $projets;
    }
    
    $pdo=null;
}

public function afficher() {
        echo $this->nom;
        
    }
    
    public function voirProjet (){
       echo"Nom : $this->nom .<br>"; 
      echo"Description : $this->description.<br>";
      echo " Temps estimé: $this->tempsEstime.<br>";
      echo "Coût Estimé : $this->coutEstime.<br>";
      echo "Nom Client: $this->nomClient.<br>";
      echo "Statut : $this->statut.<br>";
      echo "Type : $this->type.<br>";
    }
    
     public static function getByID($idProjetBijoux) {
        $pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);

        $req = $pdo->prepare("select * from projetbijoux"
                . " where idProjetBijoux=:idProjetBijoux");
        $req->bindParam(":idProjetBijoux", $idProjetBijoux);

        $req->execute();
        if ($req->rowCount() == 1) {
        $ligne =$req->fetch();
        
        
        return new projet ($ligne["Nom"], $ligne["Description"],$ligne["TpsEstime"],
                $ligne ["EstimationCout"],$ligne["Client"],$ligne["Statut"],
                $ligne["Type"]);
               
        $pdo = null;

        return null;
        }
}}