<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 3 job1</title>
        <meta charset="utf-8">
    </head>
    <body>
    
        <?php
        $tab = [200, 204, 173, 98, 171, 404, 459];
        foreach($tab as $value){
            if ($value % 2 === 0) {
                echo $value, ' est paire <br>';
             } else {
                echo $value, ' est impaire <br>';
             }
         }
      
        ?>
           
    </body>
</html>

    
