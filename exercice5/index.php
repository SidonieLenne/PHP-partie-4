<?php 
//Initialise la fonction impair() qui retourne true à chaque nombre impair
function impair($i){
    if($i % 2 != 0){
        return true;
    }
    else{
        return false;
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8"/>
<title>Exercice 5 PHP</title>
</head>
<body>
<p><?php
//Boucle qui se répète de 0 à 300 et qui affiche le nombre quand la fonction impair() retourne true
for($i= 0; $i <= 300; $i++)
{
    if(impair($i) == true)
    {
        echo $i . ', ';
    }
}
?>.</p>
</body>
</html>