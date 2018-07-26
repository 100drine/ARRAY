##Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

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

$dept[51]='Marne';
echo $dept[51];

?>
</body>
</html>