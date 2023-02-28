<?php

class Film
{
    private $idFilm;
    private $idPersonne;
    private $Libelle;
    private $Contenu;
  

    public function getIdFilm(){
        return $this->idFilm;
    }

    public function getIdPersonne(){
        return $this->idPersonne;
    }
    public function getLibelle(){
        return $this->Libelle;
    }
    public function getContenu(){
        return $this->Contenu;
    }

      

    public function SetIdFilm($newFilm){
        return $this->idFilm=$newFilm;
    }

    public function SetIdPersonne($newIdPersonne){
        return $this->idPersonne=$newIdPersonne;
    }
    public function SetLibelle($newLibelle){
        return $this->Libelle=$newLibelle;
    }
    public function SetContenu($newContenu){
        return $this->Contenu=$newContenu;
    }
    

}

?>