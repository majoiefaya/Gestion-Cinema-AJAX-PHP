<?php

session_start();
include('Serveur/ConnexionBaseDeDonnées.php');
$nom=$_SESSION["nom"];



$InfosPersonne=$db->prepare("SELECT * FROM Personne WHERE Nom=:nom_j");
$InfosPersonne->execute(
    array(
        'nom_j'=>$nom
    )
);
$Infos=$InfosPersonne->fetch();
$personne_id=$Infos["id"];

?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Casino</title>
    <link href="Css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="Scripts/sidebar.js"></script>
    <script src="Scripts/Reload.js"></script>
    <script src="Scripts/fonctionAjax.js"></script>
    <script src="Scripts/Envoie.js"></script>
    <link rel="stylesheet"  href="Css/css.css">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
   </head>

   <body>
    <header>
        <nav class="menu">
            <section id="sect1">
                <p id="para1">
                    CINEMA/Ajout Film
                </p>
            </section>
            <section id="sect2">

            </section>
        </nav>
    </header>
        <div>
            <img id="charge" src="images/loading5.gif" widht="80" height="150">
        </div>
        <div class="div">
            <img src="images/Bg.jpg" id="img">
        </div>
        <div>
            <p id="message"></p>
        </div>
        <div class="form">
            <form class="form-control" method="post" action="">
                <div>
                    <div class="form-group">
                        <label>Libelle</label>
                        <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Nom du Film">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Contenu</label>
                        <input type="text" class="form-control" name="Contenu" id="contenu" placeholder="Contenu">
                    </div>
                </div>        
                <div>
                    <h1 id="id_personne" hidden><?php echo $personne_id ?></h1>
                    <input type="button" name="button" onclick="Envoie();" value="Enregistrer" id="button" class="btn btn-dark"/>
                </div>
            </form>  
            <a href="ListeFilms.php" class="btn btn-primary">Retour Liste</a>
        </div>
    </body>
</html>