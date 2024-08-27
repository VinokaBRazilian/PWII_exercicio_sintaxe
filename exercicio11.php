<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio10.php"> Exercicio 10 </a> </p>
<p> <a href="exercicio12.php"> Exercicio 12 </a> </p>

<br>
<h1> Exercicio 11 - Soma de Números com while</h1>



<?php 

$numero = 1;

$soma = 0;

while($numero <= 100)
{
$soma = $soma + $numero; 
echo "Resultado = $soma (num=$numero)<br>"; 
$numero +=1;



}
?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>