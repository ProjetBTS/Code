<?php
session_start();
if(!isset($_SESSION['id_admin']))
{
header ('location: connexion.php');
}
else
{
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Accueil | Graphic.fxavier</title>
    </head>
    <body>
        <header>
            <div id="logo">
                <a href="index.php"><img class="logo" src="images/logo.png"/></a>
            </div>
            
            <div id="deconexion">
                 <a href="deconnexion.php">Déconnexion</a>
            </div>
            
        </header>
        
        <div id="content">
           
        </div>
        
    <footer class="footer">
       <p>Copyright 2014 &copy; - François-Xavier LEBRET </p>
    </footer> 
        
    </body>
</html>

<?php
}
?>

