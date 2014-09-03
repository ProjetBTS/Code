<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Connexion | Graphic.fxavier</title>
    </head>
    <body>
        <header>
            <div id="logo">
                <a href="index.php"><img class="logo" src="images/logo.png"/></a>
            </div>
        </header>
        
        <div id="content">
             <form method="post" action="include/authentification.php">  
                <fieldset>
                        <legend>Identification</legend>
                        <label for="login" class="login">Login : </label>
                        <input id="login" name="login" type="text" required="">
                        <label for="mdp" class="mdp">Mot de passe : </label>
                        <input id="mdp" name="mdp" type="password" required="">
                        <input type="submit" value="Connexion" />
                      <label>
                </fieldset>
            </form>
        </div>
        
<footer class="footer">
   <p>Copyright 2014 &copy; - François-Xavier LEBRET </p>
</footer> 
        
    </body>
</html>
