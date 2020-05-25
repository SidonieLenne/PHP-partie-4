<?php 
    function greetings(){
        return 'Bonjour ' . 'tout le monde';
    }
    $hello = greetings();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 2 PHP</title>
</head>
<body>
    <p>
        <?= $hello ; ?>
    </p>
</body>
</html>