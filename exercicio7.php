<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio6.php"> Exercicio 6 </a> </p>
<p> <a href="exercicio8.php"> Exercicio 8 </a> </p>

<br>
<h1> Exercicio 7 - Classificação de Nota Escolar</h1>



<?php 

$nota = 70;

if ($nota > 89)
{
echo "Resultado = Classificação A";
}
else
if ($nota >= 80 && $nota < 90)
{
echo "Resultado = Classificação B";
}
else
if ($nota >= 70 && $nota < 80)
{
echo "Resultado = Classificação C";
}
else
if ($nota >= 60 && $nota < 70)
{
echo "Resultado = Classificação D";
}
else
if ($nota < 60)
{
echo "Resultado = Classificação F";
}


?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>