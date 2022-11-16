<!DOCTYPE html>
<html>
    <head> 
        <title>PHP jour 3 job4</title>
        <meta charset="utf-8">
    </head>
    <body>

        <?php
        /*$str = "Dans l'espace, personne ne vous entend crier";
        echo strlen($str);*/

        $str = "Dans l'espace, personne ne vous entend crier";
        $count = 1;

        for ($i = 1; isset($str[$i]); $i++) {
                $count = $count + 1;
        }

        echo $count;
        
        ?>
        
    </body>
</html>