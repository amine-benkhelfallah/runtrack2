<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
      
        <?php

        /************ variable str affichage  *******/
            $str2 = ' vive ';
            echo $str2;

            $str = 'LaPlateforme';
            echo $str;
        
            $str3 = ' ! ';
            echo $str3; 
        
            echo "<br>";  // saut de ligne 
        /***** variable val == 6 + addition *******/
            $val = '6';
            echo $val; // afficher la variable 6

            echo "<br>"; // saut deligne 
            echo $val + 4; //ajouter a notre variable et l'afficher 
        
        /***** variable myBool true or false ******/
            echo "<br>"; // saut deligne 

            
            $myBool = true;
            echo $myBool;  //  afficher 1
                
            echo "<br>"; // saut deligne 

            $myBool = false;
            echo $myBool; // afficher 0 

        ?>

    </body>
</html>