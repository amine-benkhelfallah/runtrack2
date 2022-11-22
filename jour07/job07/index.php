

    <!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 7  job7</title>
        <meta charset="utf-8">      

</head>
<body>
<?php
// fractionner une chaine de caractere entre les espaces 
function fraction($str){
    $chaineDeMot = [];
    $mot = '';
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] !== ' ') {
            $mot .= $str[$i];
        } else {
            $chaineDeMot[] = $mot;
            $mot = '';
        }
    }
    $chaineDeMot[] = $mot;
    return $chaineDeMot;
}
//  convertir en gras les mots qui commencent par une majuscule  
function Gras($str){
    $chaineDeMot = fraction($str);
    $Maj = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $NouvelleChaine = '';
    foreach ($chaineDeMot as $mot) {
        $PremierMaj = false;
        for ($i = 0; isset($Maj[$i]); $i++) {
            if ($mot[0] === $Maj[$i]) {
                $PremierMaj = true;
                break;
            }
        }
        if ($PremierMaj) {
            $NouvelleChaine .= '<b>' . $mot . '</b> ';
        } else {
            $NouvelleChaine .= $mot . ' ';
        }
    }
    return $NouvelleChaine;
}
?>
    
    <form method="GET" action="" >
            <input type="text" name="str">
            <select name="fonction" >    
                                    
                    <option value="Gras">Gras</option>
                    <option value="Cesar">Cesar</option>
                    <option value="Plateforme">Plateforme</option>
                    </select> 
            <input type="submit" name="b1" value="Submit">
            </form>
            
    <?php

    if (isset($_GET["fonction"]) && $_GET["str"]) {
        switch ($_GET["fonction"]) {
            case "Gras":
                echo Gras($_GET["str"]);
                break;
            case "Cesar":
                echo Cesar($_GET["str"]);
                break;
            case "plateforme":
                echo Plateforme($_GET["str"]);
                break;
        }
    }

    ?>







    
</body>
</html>

