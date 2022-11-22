<!DOCTYPE html>
<html >
    <head>
        <title>PHP jour 7  job4</title>
        <meta charset="utf-8">
    </head>
    <body>
            <form method="POST" action="" >
        <input type="text" name="a">
        <select name="op" >                       
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                </select> 
        <input type="text" name="b">
        <input type="submit" name="b1" value="Calculer">
        </form>
        <?php
            if ($_POST){
          
            
            $a=$_POST['a'];
            $op=$_POST['op'];
            $b=$_POST['b'];
        
            function calcule($a, $op, $b){
                switch($op){
                    case "+":
                        return $a + $b;
                        break;
                    case "-":
                        return $a - $b;
                        break;
                    case "*":
                        return $a* $b;
                        break;
                    case "/":
                        return $a / $b;
                        break;
                    case "%":
                        return $a % $b;
                        break;
                }
            }
        
            
            echo calcule($a, $op, $b) ;
        }
        ?>

    </body> 
</html>



