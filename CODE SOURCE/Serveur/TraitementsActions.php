<?php
include('Film.Admin.php');
header("Content-Type: text/plain ; charset=utf-8");
header("Cache-Control:no-cache,private");
header("Pragma:no-cache");
sleep(2);
$parametres=file_get_contents('php://input');

$TabJson=json_decode($parametres);

$personne_id=$TabJson->personne_id;
$libelle=$TabJson->libelle;
$contenu=$TabJson->contenu;

$filmAdmin=new FilmAdmin();
$film=new Film();
$film->SetLibelle($libelle);
$film->SetContenu($contenu);
$film->SetIdPersonne($personne_id);
if($filmAdmin->AjouterFilm($film)){
    $resultat='
    {"resultats":
        {
        "message":"Film Bien Enregistré"
        }
    }';
    
    echo $resultat;
    
}
else{
    $resultat='
    {"resultats":
        {
        "message":"Erreur lors dEnregistrement"
        }
    }';
    
    echo $resultat;
}




?>