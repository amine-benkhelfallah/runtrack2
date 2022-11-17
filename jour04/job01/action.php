
       <?php
       
       echo 'Votre Nom est :', $_GET['name'], '</br>' ; 
       
       echo 'Votre Message est :',$_GET['message'], '</br>';
       //echo 'Le nombre d’argument GET envoyé est : ' , sizeof($_GET);  // nombres d'argument GET avec une fonction 

       $count=0;
       foreach($_GET as $key => $value){
           $count++;
       }
       echo 'Le nombre d’argument GET envoyé est : ' , $count;
   
     
        ?>
           
  
    
