##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$dept=array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas De Calais', 80 =>'Somme');

foreach ($dept as $value){
    echo $value;
}


    ?>
</body>
</html>