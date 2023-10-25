<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
	echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: Kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
	
//04 - Faça um programa que receba o salário de um funcionário, calcule e mostre o novo salário, sabendo-se que sofreu um aumento de 25%.

$sala = 1000;
$aumen = 25/100;

$soma = ($sala*$aumen);
$soma2 = ($sala+$soma);

	echo "04 - Faça um programa que receba o salário de um funcionário, calcule e mostre o novo salário, sabendo-se que sofreu um aumento de 25%." ."<p>";
	
	echo
	"salario antigo = " .$sala ."<br />"
	."aumento = " .$aumen ."<br />"	
	."Seu novo salario é = " .$soma2 ."<br />"
	."<hr />";

?>
</body>
</html>