<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 3  job5</title>
        <meta charset="utf-8">      
    </head>
    <body>

        <?php
            $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";            
            $voyelles = ["A", "a", "E", "e", "I", "i", "O", "o", "U", "u", "Y", "y"];
            $consonnes = [ "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z", "b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"];
            $countV = 0;
            $countC = 0;
            for($i = 0; isset($str[$i]); $i++){
                foreach($voyelles as $value){
                    if($str[$i] === $value){
                        $countV++;
                        }
                    }
                foreach($consonnes as $value){
                    if($str[$i] === $value){
                        $countC++;
                        }
                    }
                }
        
                $dic = [
                    "nbrvoyelles" => $countV,
                    "nbrconsonnes" => $countC
                ];
        ?>
        
        <table border = 1>
            <thead>
                <tr>
                    <th>Consonnes</th>
                     <th>Voyelles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $dic["nbrconsonnes"];?></td>
                    <td><?php echo $dic["nbrvoyelles"];?></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
