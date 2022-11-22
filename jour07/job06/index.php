

    <!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 6  job6</title>
        <meta charset="utf-8">      
    </head>
    <body>
    <h>
        <h2>Une fonction nommée “leetSpeak($str)” qui remplace des lettres par des chiffres d'une chaîne de caractères</h2>
        <ul>
  <li>les “A” deviennent des “4”</li>
  <li>les “B” deviennent des “8”</li>
  <li>les “E” deviennent des “3”</li>
  <li>les “G” deviennent des “6”</li>
  <li>les “L” deviennent des “1”</li>
  <li>les “S” deviennent des “5”</li>
  <li>les “T” deviennent des “7”</li>
</ul>
<p>Cela est valable que l’on crie ou non (majuscules et minuscules)</p>


    <form method="POST" action="" >
        <input type="text" name="str" placeholder="Entrez une chaîne de caractères"> 

        <input type="submit" name="b1" value=" Submit  ">
        </form>
        <?php
         if ($_POST){
            $str=$_POST['str'];
        function leetSpeak($str){
        for($i=0; isset($str[$i]); $i++){
            switch ($str[$i]){
                case "a":
                case "A":
                    $str[$i] = "4";
                    break;
                case "b":
                case "B":
                    $str[$i] = "8";
                    break;
                case "e":
                case "E":
                    $str[$i] = "3";
                    break;
                case "g":
                case "G":
                    $str[$i] = "6";
                    break;
                case "l":
                case "L":
                    $str[$i] = "1";
                    break;
                case "s":
                case "S":
                    $str[$i] = "5";
                    break;
                case "t":
                case "T":
                    $str[$i] = "7";
                    break;
            }
        
        }
        return $str;
    }
        echo leetSpeak($str);
    }
        ?>  

    </body>
</html>



