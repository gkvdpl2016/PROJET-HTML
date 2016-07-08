<?php
    if(empty($_GET["email"]))  {
        echo "Email non renseigné";
        return;
    }       
    
    $email=$_GET["email"];
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        echo "Vous etes inscrit";
    else 
        echo "Email non valide";
?>



