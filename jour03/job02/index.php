<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 3 job2</title>
        <meta charset="utf-8">
    </head>
    <body>
    
        <?php
         $str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

         $long = 0;
         $i=0;
         while (isset($str[$i])) {      // isset  Determine si une variable est declarée et est différente de null
         $long++;                    // Pour calculer la longeur de la chaine du caractere.
         $i++;
         }
 
         for ($i =0; $i < $long; $i++) {
         if ($i % 2 == 0) {               // Pour afficher que les caractere impaire.  
             echo $str[$i];
         }
         }
        
      
        ?>
           
    </body>
</html>

    

