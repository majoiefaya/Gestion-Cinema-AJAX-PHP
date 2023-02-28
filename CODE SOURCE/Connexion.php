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
                <a href="Inscription.php" type="submit" class="btn btn-warning">Inscription</a>
            </section>
        </nav>
    </header>
        <div class="div">
            <img src="images/Bg.jpg" id="img">
        </div>
        <div class="form">
            <form class="form-control" method="post" action="Serveur/Connexion.controller.php">
                <div>
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-warning" value="Connexion">
                </div>
            </form>  
        </div>
    </body>
</html>