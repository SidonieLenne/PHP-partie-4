<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8"/>
<title>Exercice 5 PHP</title>
</head>
<body>
<p><?php
for($i=1 ; $i <=100 ; $i++)
{
    if($i%3 == 0 && $i%5 != 0)
    {
      echo 'Fizz, ';  
    }
    elseif($i%5 == 0 && $i%3 != 0){
        echo 'Buzz, ';
    }
    elseif($i%3 == 0 && $i%5 == 0){
        echo 'FizzBuzz, ';
    }
    else{
        echo $i . ', ';
    }
}
?></p>
</body>
</html>