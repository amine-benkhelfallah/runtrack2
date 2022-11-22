<!DOCTYPE html>
<html >
    <head>
        <title>PHP jour 7  job2</title>
        <meta charset="utf-8">
    </head>
    <body>



            <?php


          

            $jour = true;


             function bonjour($jour){
                if($jour == true){
                    echo "Bonjour";

                }
                
                else{
                    echo "Bonsoir";
                }
              

             }
            
            bonjour($jour);

            ?>
    </body>
</html> 