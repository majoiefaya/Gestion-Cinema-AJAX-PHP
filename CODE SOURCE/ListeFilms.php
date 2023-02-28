<?php

session_start();
include('Serveur/ConnexionBaseDeDonnées.php');
$id=$_SESSION["idP"];

$Liste=$db->prepare("SELECT * FROM Film WHERE id_personne=:id");
$Liste->execute(
    array(
        'id'=>$id
    )
);
$ListeFilms=$Liste->fetch();

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
                    CINEMA
                </p>
            </section>
            <section id="sect2">
                <a href="AjoutFilm.php" type="submit" class="btn btn-warning">Ajouter</a>
                <a href="Serveur/Deconnexion.Controller.php" type="submit" class="btn btn-warning">Deconnexion</a>
            </section>
        </nav>
    </header>
        <div class="div">
            <img src="" id="img">
        </div>
        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Contenu</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        while($ListeFilms=$Liste->fetch()){?>
                            <tr>  
                                <td><?php echo $ListeFilms["id"]?></td>
                                <td><?php echo $ListeFilms["libelle"]?></td>
                                <td><?php echo $ListeFilms["Contenu"]?></td>
                            </tr>      
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>