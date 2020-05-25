<?php 
    function greetings(){
        return 'BONJOUR';
    }
    $hello = greetings();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 1 PHP</title>
</head>
<body>
    <p>
        <?= $hello ; ?>
    </p>
</body>
</html>