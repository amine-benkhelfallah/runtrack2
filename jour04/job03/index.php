<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 4 job3</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action=" " method="POST"> </br>
        <input type="text" name="name" placeholder="name"> </br>
        <textarea name="message" placeholder="Message"></textarea>  </br>
        <input type="submit" value="Envoyer!">
        </form>

        <?php
            
        $count=0;
        foreach($_POST as $key => $value){
            $count++;
        }
        echo 'Le nombre d’argument POST envoyé est : ' , $count;

        ?>




    </body>   
</html>
