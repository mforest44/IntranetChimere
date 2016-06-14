<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of client
 *
 * @author Maxime
 */
class client {
    public $nom;
    public $prenom;
    public $adresse;
    public $numero;
   
    public $ville;
    
    public function __construct($nom,$prenom,$adresse,$numero,$ville){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->numero=$numero;
        
        $this->ville=$ville;
    }
    
public function enregistrer() {
$pdo = new PDO("mysql:host=".config::SERVERNAME
                .";dbname=" . config::DBNAME
                , config::USER
                , config::PASSWORD);

$req=$pdo->prepare("INSERT into client"
                ." (Nom,Prenom,NumTel,Adresse,Ville) values "
                ."(:nom,:prenom,:numero,:adresse,:ville);");

        $req->bindParam(":adresse", $this->adresse);
        
        $req->bindParam(":nom", $this->nom);
        $req->bindParam(":numero", $this->numero);
        $req->bindParam(":prenom", $this->prenom);
        $req->bindParam(":ville", $this->ville);
$req->execute();
$pdo=null;
}


}
    

