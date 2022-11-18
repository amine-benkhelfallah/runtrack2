<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 4 job6</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <form action="" method="post"> 
            <label for="number">Nombre :</label>
            <input type="text"  name="number" />   <br>                      
            <input type="submit" value="Nombre: Pair ou Impair ! ">
        </form>

        <?php
   
        if ($_POST){
       
        if($_POST["number"] % 2 === 0){
            echo "<p>".$_POST["number"]." :  Est un nombre pair. </p>";
            }
        else{
            echo "<p>".$_POST["number"]." :  Est un nombre impair. </p>";
            }  
      
        }

        ?>
    
    </body>
</html>

    
