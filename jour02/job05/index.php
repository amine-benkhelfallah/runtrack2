<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 2 </title>
        <meta charset="utf-8">
    </head>
    <body>
    
        <?php
            for($x = 2; $x <= 1000; $x++) { //On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
                $nbDiv = 0; //Et on compte le nombre de diviseur 

                for($j = 1;     $j <= $x; $j++){

                    if($x%$j == 0){
                        $nbDiv++;            
                    }
                }
                if($nbDiv == 2){ // 2 represente le nombre de diviseur 
     
                    echo $x." <br> ";
                }
            }
            ?>

            
           
    </body>
</html>

    