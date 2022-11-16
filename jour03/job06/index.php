<!DOCTYPE html>
<html >
    <head>
        <title>PHP jour 3  job6</title>
        <meta charset="utf-8">
    </head>
    <body>

        <?php
           
            $str = "Les choses que l'on possede finissent par nous posseder";

            for($i = -1; isset($str[$i]); $i--){
                echo "$str[$i]";
            }
            // Une autre methode avec la fonction strrev
            /*$str = "Les choses que l'on possede finissent par nous posseder";   
            echo strrev($str);*/
        ?>

    </body>
</html>
