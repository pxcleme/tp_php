<?php require("exo4_partie3.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $personnage=new Perso("teemo",100,21);
    $personnage->AfficherPersonnage();
    
    $personnage1=new Perso("tresh",100,20);
    $personnage1->AfficherPersonnage();

    $personnage->Attaque($personnage1);
?>
</body>
</html>