<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 8  job3</title>
        <meta charset="utf-8">      

</head>
    <body>
        <?php
        session_start();
        if(isset($_POST['submit'])) {
            $_SESSION['user'][] = $_POST['prenom'];
        }
        if(isset($_POST['reset'])) {
            unset($_SESSION['user']);
        }
        ?>


        <form method="POST" id="form">
            <input type="text" name="prenom" placeholder="Entrez votre prénom ">
            <input type="submit" name="submit" value="Envoyer">
            <input type="submit" name="reset" value="Reset">
        </form>


        <?php
        if(isset($_SESSION['user'])) {
            foreach($_SESSION['user'] as $values){ 
            echo '<br>'. $values . '</br>';
            }
        }
        ?>

    </body>
</html>