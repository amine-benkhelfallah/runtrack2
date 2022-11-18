<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 4 job4</title>
        <meta charset="utf-8">
    </head>
    <body>
    
         <form action="" method="POST"> </br>
         <input type="text" name="Nom" placeholder="Nom"> </br>
         <input type="text" name="Prenom" placeholder="Prenom"> </br>
         <input type="submit" value="Envoyer!">
        </form>

        <?php
        if($_POST){
        echo "<table border = 1 >
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>";
        

        foreach($_POST as $key => $value){
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
        }
         
        }

        ?>
   
           
    </body>
</html>
    
