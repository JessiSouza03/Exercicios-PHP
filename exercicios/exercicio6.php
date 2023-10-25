<html>
<head>
<title>Lista_1</title>
</head>
<body>

<?php
    echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: Kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
	
	// 06-  Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de 5% sobre 0 salário base e paga 7% sobre este salário.

	$salaBase = 1500;
	$grt = $salaBase*(5/100);
	$imposto = $salaBase*(7/100);

$salaFinal = ($salaBase + $grt + $imposto);


	echo "Faça um programa que receba o salário base de um funcionário, calcule e mostre o 
salário a receber, sabendo-se que o funcionário tem gratificação de 5% sobre o salário base 
e paga 7% sobre este salário."."<p>";

	echo
	"Salário Base =".$salaBase."<br />"
	."Gratificação =".$grt."<br />"
	."Imposto =".$imposto."<br />"
	."O seu salário final é: =".$salaFinal."<br />"
	."<hr/>";

?>
</body>
</html>