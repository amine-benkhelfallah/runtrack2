<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 8  job02</title>
        <meta charset="utf-8">      

</head>
    <body>

    <form action="" method="POST">      
        <input type="submit" name="button" value="reset">
        </form>


        <?php 
          session_start(); 
        

          if(isset ($_POST['button'])){
            setcookie('nbvisites', '1', time()+ 3600);
            header("Location: index.php");
            exit();
        }



        if(isset ($_COOKIE['nbvisites'])){
            $count = $_COOKIE['nbvisites']+1;
            setcookie('nbvisites', $count, time()+ 3600);
            echo 'Vous êtes le visiteurs n°' . $_COOKIE['nbvisites'];
        
        }
      
    
            

        ?>

    </body>
</html>


