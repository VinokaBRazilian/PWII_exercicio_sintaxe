<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio12.php"> Exercicio 12 </a> </p>
<p> <a href="exercicio14.php"> Exercicio 14 </a> </p>

<br>
<h1> Exercicio 13 - Fatorial com for</h1>



<?php 

$fatorial = 5;
$numero = $fatorial;


for($i=$fatorial;$i>1;$i--) 
{
$numero--;
$fatorial = $fatorial * $numero;

}

echo "Resultado = $fatorial <br>";



?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>