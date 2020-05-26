<?php 
    function identity(){
        $name = 'Lenne';
        $firstName = 'Sidonie';
        $age = 21;
        return 'Bonjour ' . $name . ' ' . $firstName . ' tu as ' . $age . ' ans';
    }
    $greetings = identity();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 4 PHP</title>
</head>
<body>
    <p>
        <?= $greetings; ?>
    </p>
</body>
</html>