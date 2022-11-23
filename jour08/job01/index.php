<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 7  job7</title>
        <meta charset="utf-8">      

</head>
    <body>
        <form action="" method="GET">      
        <input type="submit" name="button" value="reset">
        </form>


        <?php session_start(); 

        if(isset ($_SESSION['nbvisites'])){
            $_SESSION['nbvisites']++;
        
        }
        if(isset ($_GET['button'])){
            $_SESSION['nbvisites'] = 0 ;
            header("location:"."index.php");
        }

        echo 'Vous êtes le visiteurs n°' . $_SESSION['nbvisites'];  
            

        ?>
    </body>
</html>


