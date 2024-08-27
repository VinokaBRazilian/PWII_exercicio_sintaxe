<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio11.php"> Exercicio 11 </a> </p>
<p> <a href="exercicio13.php"> Exercicio 13 </a> </p>

<br>
<h1> Exercicio 12 - Tabuada com for</h1>



<?php 

$tabuada = 5;



for($mult=1;$mult<11;$mult++)
{
$result = $mult * $tabuada;    
echo "Resultado = $tabuada x $mult = $result <br>";


}





?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>