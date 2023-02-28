<?php
    session_start();
    include_once('Personne.Admin.php');
        
        $nom = $_POST["nom"];
        $password = $_POST["password"];

        $UserAdmin = new PersonneAdmin();

        $result = $UserAdmin->PersonneLogin($nom, $password);

        if($result != null){

            $auth = true;
            $_SESSION['nom'] = $nom;
            $_SESSION['idP']=$result['id_personne'];
            $_SESSION['prenom']= $result['Prenom'];
            $_SESSION['username']= $result['Username'];
            $_SESSION['password']= $password;
            $_SESSION['Telephone']=$result['Telephone'];

            setcookie("Auth",$nom,time()+7*24*3600,"/");

           header('Location:../ListeFilms.php');
        }
        else{
            echo"Identifiants Erronés";
            header('Location:../Connexion.php');
        }
?>