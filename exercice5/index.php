<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8"/>
<title>Exercice 5 PHP</title>
</head>
<body>
<p><?php
//Boucle qui se répète de 0 à 300 et qui affiche le nombre quand le reste de ce nombre divisé par 2 est différent de 0
for($i= 0; $i <= 300; $i++)
{
    if($i % 2 != 0)
    {
        echo $i . ', ';
    }
}
?></p>
</body>
</html>