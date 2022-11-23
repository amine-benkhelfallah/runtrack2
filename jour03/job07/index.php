<!DOCTYPE html>
<html >
    <head>
        <title>PHP jour 3  job7</title>
        <meta charset="utf-8">
    </head>
    <body>

        <?php



           $str = "Certaines choses changent, et d'autres ne changeront jamais";
            $str2 = "";
    
           for($i = 0; isset($str[$i]); $i++){

                if (!isset($str[$i+1])){
                    $str2 = $str2.$str[0]; //$str2 .=$str[0] meme ecriture 
                    
                }
                else{
                    $str2 = $str2.$str[$i+1];
                }
                
           }
           
           echo $str2;
    
        ?>
    

    </body>
</html>
