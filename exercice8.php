##Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
 $mois=array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");

 for ($i=0;$i<count($mois);$i++){
     echo "$mois[$i]";
 }

?>
</body>
</html> 