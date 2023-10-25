<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
    echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: Kaique Aleixo NOME 03: Pedro Gomes." ."<p>";

//      17 - Pedro comprou um saco de ração com peso em quilos. Ele possui dois gatos, para os quais fornece a quantidade de ração em gramas. A quantidade diária de ração fornecida para cada gato é sempre a mesma. Faça um programa que receba o peso do saco da ração e a quantidade de ração fornecida para cada gato, calcule e moste o quanto restará de ração no saco após cinco dias

$ração = 15;
$gato1 = 0.100;
$gato2 = 0.100;
$dias = 5;

$soma1 = ($gato1 * $dias);
$soma2 = ($gato2 * $dias);
$soma3 = ($soma1 + $soma2);
$resultado = ($soma3 + $ração);

    echo "Pedro comprou um saco de ração com peso em quilos.
	Ele possui dois gatos, para os quais fornece a quantidade de ração em gramas.
	A quantidade diária de ração fornecida para cada gato é sempre a mesma.
	Faça um programa que receba o peso do saco da ração e a quantidade de ração
	fornecida para cada gato, calcule e moste o quanto restará de ração no saco após cinco dias"."<p>";
		
	echo 
	"O peso da ração será: =" .$resultado ."<br/>"
	."<hr />";
	

    ?>
    </body>
    </html>