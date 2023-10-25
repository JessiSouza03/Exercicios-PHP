<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
    echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: Kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
    
// 13 - Sabe-se que: 1 pé = 12 polegadas; 1 jarda = 3 pés; 1 milha = 1.760 jardas - Faça um programa que receba uma medida em pés, faça as conversões a seguir e mostre os resultados. A - polegadas; B - jardas; C - milhas.


$pes = 10000;

$polegadas = ($pes*12);
$jardas = ($pes/3);
$milhas = ($pes/5280);


    echo "// 13 - Sabe-se que: 1 pé = 12 polegadas; 1 jarda = 3 pés; 1 milha = 1.760 jardas - Faça um programa que receba uma medida em pés, faça as conversões a seguir e mostre os resultados. A - polegadas; B - jardas; C - milhas." ."<p>";

    echo
    "Medida em pes = " .$pes ."<br />"
    ."Medida em polegadas = " .$polegadas ."<br />"    
    ."Medida em jardas = " .$jardas ."<br />"
    ."Medida em milhas = " .$milhas ."<br />"
    ."<hr />";

?>
</body>
</html>