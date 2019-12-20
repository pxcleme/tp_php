<?php require("exo3_partie3.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $personnage=new P2("teemo",100);
    $personnage->setP2("teemo",100);
    $personnage->AfficherPersonnage(); 
    
    $personnage1=new P3("tresh",120);
    $personnage1->setP3("tresh",120);
    $personnage1->AfficherPersonnage1();
?>
</body>
</html>