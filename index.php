<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> Exercicio 2 </p>

<p> Exercicio 3 </p>

<br>
<h1> Exercicio 1</h1>



<?php 
$numero1 = 50;
$numero2 = 5;
$operacao = "div";
$resultado;


if($operacao == "ad")
{
$resultado = $numero1 + $numero2;
echo "Resultado = $resultado";
}
else
if($operacao == "mult")
{
$resultado = $numero1 * $numero2;
echo "Resultado = $resultado";
}
else
if($operacao == "div")
{
$resultado = $numero1 / $numero2;
echo "Resultado = $resultado";
}
else
if($operacao == "sub")
{
$resultado = $numero1 - $numero2;

echo "Resultado = $resultado";
}


?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>