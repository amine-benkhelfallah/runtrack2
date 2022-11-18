<!DOCTYPE html>
<html>
    <head>
        <title>PHP jour 4 job1</title>
        <meta charset="utf-8">
    </head>
    <body>
    
         <form action=" " method="GET"> </br>
         <input type="text" name="name" placeholder="name"> </br>
         <textarea name="message" placeholder="Message"></textarea>  </br>
         <input type="submit" value="Envoyer!">
         </form>

         <?php
        //echo 'Le nombre d’argument GET envoyé est : ' , sizeof($_GET);  // nombres d'argument GET avec une fonction 
        
        $count=0;
        foreach($_GET as $value){
            $count++;
        }
     
       echo 'Le nombre d’argument GET envoyé est : ' , $count;
   
        ?>
   
     
           
    </body>
</html>
    
