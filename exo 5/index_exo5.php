<?php require("exo 5.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $personnage=new Perso(1);
    $personnage->AfficherPersonnage();
    
    $personnage1=new Perso(2);
    $personnage1->AfficherPersonnage();


?>
</body>
</html>