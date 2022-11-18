<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 4 job5</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="" method="POST"> </br>
            <label for="username">Identifiant :</label>
            <input type="text" name="username" /></br>
            <label for="password">Mot de passe :</label>
            <input type="password"  name="password" /></br>
            <input type="submit" value="Connexion">
        </form>

    <?php
    if(!$_POST){

    }
    else {
        if($_POST["username"] === "John" && $_POST["password"] === "Rambo"){
            echo "C'est pas ma guerre";
        }
        else{
            echo "Votre pire cauchemar";
        }
    }
    ?>
</body>
</html>

    
