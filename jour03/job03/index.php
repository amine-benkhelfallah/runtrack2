<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 3 job3</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <?php
            $str = "I\'m sorry Dave I\'m afraid I can\'t do that.";
            $vowels = ["A", "a", "E", "e", "I", "i", "O", "o", "U", "u", "Y", "y"];

            for($i = 0; isset($str[$i]); $i++){
                foreach($vowels as $value){
                    if($str[$i] == $value){
                        echo $str[$i];
                    }
                }
            }
        ?>
    </body>
</html>







