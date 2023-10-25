<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
    echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
	
	// 07 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de R$ 50,00 sobre 0 salário base e paga 10% sobre este salário.

$SalaBase = 2000;
$grt = 50;
$imposto = $SalaBase*(10/100);

$salafinal = ($SalaBase + $grt + $imposto);


	echo "07 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, 
	sabendo-se que o funcionário tem gratificação de R$ 50,00 sobre 0 salário base e paga 10% sobre este salário."."<p>";
		
	echo 
	"Salário Base =" .$SalaBase ."<br/>"
	."Gratificação =" .$grt ."<br />"
	."Deverá pagar =" .$imposto ."<br />"
	."Seu salário final é: =" .$salafinal ."<br />"
	."<hr />";
	
?>
</body>
</html>