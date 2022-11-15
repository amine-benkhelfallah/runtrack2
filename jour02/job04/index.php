<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 2 </title>
        <meta charset="utf-8">
    </head>
    <body>
    
        <?php
            for($x = 0; $x <= 100; $x++){   

                if ($x%5 == 0 && $x%3 == 0 ){   
                    echo " FizzBuzz  <br>";
                } 
                else if ($x%5 == 0) {
                    echo "Buzz. <br>";
                }
                else if ($x%3 == 0 )  {
                    echo "Fizz. <br>";
                }
                else {
                    echo "$x <br>";
                }     
            }
            ?>

            
           
    </body>
</html>

    