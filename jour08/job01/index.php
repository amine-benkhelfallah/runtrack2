<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 8  job1</title>
        <meta charset="utf-8">      

</head>
    <body>
        <form action="" method="POST">      
        <input type="submit" name="button" value="reset">
        </form>


        <?php session_start(); 

        if(isset ($_SESSION['nbvisites'])){
            $_SESSION['nbvisites']++;
        
        }
        if(isset ($_POST['button'])){
            $_SESSION['nbvisites'] = 0 ;
            header("location:"."index.php");
        }

        echo 'Vous êtes le visiteurs n°' . $_SESSION['nbvisites'];  
            

        ?>
    </body>
</html>


