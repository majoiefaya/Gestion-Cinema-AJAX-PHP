<?php
    session_start();
    include_once('Personne.Admin.php');
    include_once('Personne.Class.php');
        
        $nom = $_POST["nom"];
        $prenom=$_POST["prenom"];
        $username=$_POST["username"];
        $password = $_POST["password"];
        $telephone = $_POST["telephone"];
        $personne=new Personne();
        
        $personne->setNom($nom);
        $personne->setPrenom($prenom);
        $personne->SetUsername($username);
        $personne->setPassword($password);
        $personne->SetTelephone($telephone);

        $PersonneAdmin = new PersonneAdmin();

        $result = $PersonneAdmin->AjouterPersonne($personne);

        if($result==true){
            header('Location:../Connexion.php');
        }
        else{
            echo"Inscription Echouée";
            header('Location:../Inscription.php');
        }
?>