<!DOCTYPE html>
<html >
    <head>
        <title>PHP jour 3  job6</title>
        <meta charset="utf-8">
    </head>
    <body>

        <?php
            $str = "Les choses que l'on possede finissent par nous posseder";

            for($i = 0; isset($str[$i]); $i--){
                echo "$str[$i]";
            }
        ?>

    </body>
</html>
