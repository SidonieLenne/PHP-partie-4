<?php 
    function number(){
        $weAreNumberOne = 11;
        $numberTwo = 11;
        if ($weAreNumberOne < $numberTwo){
            return 'Le premier nombre est plus petit';
        }
        elseif ($weAreNumberOne > $numberTwo){
            return 'Le premier nombre est plus grand';
        }
        elseif ($weAreNumberOne == $numberTwo){
            return 'Les deux nombres sont identiques';
        }
    }
    $stonks = number();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 3 PHP</title>
</head>
<body>
    <p>
        <?= $stonks ; ?>
    </p>
</body>
</html>