<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio5.php"> Exercicio 5 </a> </p>
<p> <a href="exercicio7.php"> Exercicio 7 </a> </p>

<br>
<h1> Exercicio 6 - Verificação de Número Positivo, Negativo ou Zero</h1>



<?php 

$numero = 10;

if ($numero < 0)
{
    echo "Resultado = $numero é Negativo";
}
else
if ($numero == 0)
{
    echo "Resultado = $numero é Zero";
}
else
echo "Resultado = $numero é Positivo";


?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>