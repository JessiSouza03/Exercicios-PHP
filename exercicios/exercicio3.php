<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
	echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: Kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
	
//	03 - Faça um programa que receba três notas e seus respectivos pesos, calcule e mostre a média ponderada dessas notas.

$nota1 = 30;
$nota2 = 20;
$nota3 = 14;

$pesoNota1 = 3;
$pesoNota2 = 3;
$pesoNota3 = 3;

$soma = ($nota1*$pesoNota1 + $nota2*$pesoNota2 + $nota3*$pesoNota3);
$soma2 = ($pesoNota1 + $pesoNota2 + $pesoNota3);
$media = ($soma/$soma2);

	echo "03 - Faça um programa que receba três notas e seus respectivos pesos, calcule e mostre a média ponderada dessas notas."."<p>";
	
	echo 
	"Primeira nota = " .$nota1 ."<br />"
	."Segunda nota = " .$nota2 ."<br />"	
	."Terceira nota = " .$nota3 ."<br />"	
	."Primeiro peso	= " .$pesoNota1 ."<br />"
	."Segundo peso = " .$pesoNota2 ."<br />"	
	."Terceiro peso = " .$pesoNota3 ."<br />"	
	."A media é = " .$media ."<br />"
	."<hr />";
	
?>
</body>
</html>