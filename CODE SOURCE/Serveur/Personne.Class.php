<?php

class Personne{
    private $id_personne;
    private $nom;
    private $prenom;
    private $username;
    private $password;
    private $Telephone;

    public function getId(){
        return $this->id_personne;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getTelephone(){
        return $this->Telephone;
    }


    public function SetId($newId){
        return $this->id_personne=$newId;
    }
    public function SetNom($newNom){
        return $this->nom=$newNom;
    }
    public function SetPrenom($newPrenom){
        return $this->prenom=$newPrenom;
    }
    public function SetUsername($newUsername){
        return $this->username=$newUsername;
    }
    public function SetPassword($newPassword){
        return $this->password=$newPassword;
    }
    public function SetTelephone($newTelephone){
        return $this->Telephone=$newTelephone;
    }
}

?>