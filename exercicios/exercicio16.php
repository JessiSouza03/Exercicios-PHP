	<html>
	<head>
		<Title>Lista de exercícios 1 PHP</title>
	</head>
<body>

	<?php
			// 16 - Faça um programa que receba o número de horas trabalhadas e valor do salário mínimo, calcule e mostre o salário a receber seguindo estas regras: A - a hora trabalhada vale a metade do salário mínimo; B - o salário bruto equivale ao número de horas trabalhadas multiplicado pelo valor da hora trabalhada; C - o imposto equivale a 3% do salário bruto; D - o salário a receber equivale ao salário bruto menos o imposto.

				$salario_min = 1800;
				$horastb = 15;
				$valorhtb = 8;

				$horastb = ($salario_min / 2);
				$salario_bruto =($horastb * $valorhtb);
				$imposto = ($salario_bruto / 100 * 3);
				$salario =($salario_bruto - $imposto);

			echo "16 - Faça um programa que receba o número de horas trabalhadas e valor do salário mínimo, calcule e mostre o salário a receber seguindo estas regras: A - a hora trabalhada vale a metade do salário mínimo; B - o salário bruto equivale ao número de horas trabalhadas multiplicado pelo valor da hora trabalhada; C - o imposto equivale a 3% do salário bruto; D - o salário a receber equivale ao salário bruto menos o imposto."."<p>";
	
			echo "Seu salario é = ". $salario."<br />"
			."<hr />";
	?>
