<?php require("exo1_partie3.php");
?>

<html>
<head>  
        <link rel="stylesheet" href="css_exo_1_partie3.css">
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $personnage=new P1();
    $personnage->setP1("Player_1","Joueur"); 
 ?> <div class="P1"> <?php $personnage->AfficherPersonnage();  // fin du personnage 1  ?></div> 
   
</body>
</html>