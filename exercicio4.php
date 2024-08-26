<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio3.php"> Exercicio 3 </a> </p>
<p> <a href="exercicio5.php"> Exercicio 5 </a> </p>

<br>
<h1> Exercicio 4 - Verificação de Paridade</h1>



<?php 



$numero = 5;
$div = $numero / 2;

$resto = $numero % 2;

if ($resto > 0)
{
    echo "O numero $numero é impar.";
}
else

echo "O numero $numero é par.";







?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>