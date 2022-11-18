<!DOCTYPE html>
<html >
    <head>
    <title>PHP jour 4 job7</title>
    <meta charset="UTF-8">
    </head>
    <body>

        <form action="" method="GET"> 
            <input type="text" name="width" placeholder="Largeur"/><br>
            <input type="text" name="height" placeholder="Hauteur"/><br> 
            <input type="submit" value="Afficher la maison">
        </form><br/>

        <?php
        if ($_GET){
            // TRIANGLE 
            for($h=1; $h <= $_GET["height"]; $h++){
            
                for ($spaceBefore = 1; $spaceBefore <= ($_GET["height"] - $h); $spaceBefore++){
                    echo "&nbsp;&nbsp;";
                }
                echo "/";

                for ($underscore = 1; $underscore <= ($h*2 - 2) ; $underscore++){
                    echo "_";
                }
                echo "\<br/>";
            }

            // RECTANGLE
            for($h=1; $h <= $_GET["height"]; $h++){
                echo "|";
                if ($h == $_GET["height"]){
                
                    for ($w=1; $w <= ($_GET["width"] - 2); $w++){
                        echo "_";
                    }
                }
                else{
                    
                    for ($w=1; $w <= ($_GET["width"] - 2); $w++){
                        echo "&nbsp;&nbsp;";
                    }
                }

                echo "|<br/>";
            }
        }
        ?>

    </body>
</html>