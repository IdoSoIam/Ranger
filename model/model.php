<?php

require 'model/bdd.php';

class SELECTIMAGE extends BDD{

  public function __construct()
  {

  }
  public function Selectionner(){
    $connexion = $this->dbConnect();
    $requete = $connexion->prepare('SELECT img FROM image');
    $requete->execute();
    return $requete;
  }
}

class DISPLAYCOMMENT extends BDD{

  public function Displaycomment(){
    $connexion = $this->dbConnect();
    $requete = $connexion->prepare('SELECT nom, poste, site, metier, commentaire FROM comment ORDER BY RAND () limit 3');
    $requete->execute();
    return $requete;
  }
}
?>
