<!DOCTYPE html>
<html >
    <head>
        <title>PHP jour 7  job5</title>
        <meta charset="utf-8">
    </head>
    <body>
       <?php
        $str ='Bonjour les copins';
        $char ='o';      
            function occurrences($str, $char){
                
                    $count = 0;
                    for ($i=0; isset($str[$i]) ; $i++) { 
                        if ($str[$i] === $char){
                            $count=$count+1;
                        }
                    }
                    return $count;
                } 

     
            echo occurrences($str, $char) ;
        ?>
    </body>
</html>