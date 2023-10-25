
<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
    echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
    
// 15 - O custo ao consumidor de um carro é a soma de preço de fábrica com o percentual de lucro do distribuidor e dos impostos aplicados ao preço de fábrica. Faça um programa que receba o preço de fábrica de um veículo, o percentual de lucro do distribuidor e o percentual de impostos calcule e mostre: A - o valor correspondente ao lucro do distribuidor; B - o valor correspondente aos impostos; C - o preço final do veículo.

$precodfab = 24000;
$pLucro = 30/100;
$pImposto = 50/100;

$Lucro = ($precodfab*$pLucro);
$Imposto = ($precodfab*$pImposto);

$valcLuc = ($precodfab+$Lucro);
$valcImp = ($precodfab+$Imposto);
$total = ($precodfab+$Lucro+$Imposto);


    echo "// 15 - O custo ao consumidor de um carro é a soma de preço de fábrica com o percentual de lucro do distribuidor e dos impostos aplicados ao preço de fábrica. Faça um programa que receba o preço de fábrica de um veículo, o percentual de lucro do distribuidor e o percentual de impostos calcule e mostre: A - o valor correspondente ao lucro do distribuidor; B - o valor correspondente aos impostos; C - o preço final do veículo." ."<p>";

    echo
    "Preço de fábrica do carro: " .$precodfab ."<br />"
    ."Preço do carro com o percentual de lucro do distribuidor: " .$valcLuc ."<br />"
    ."Preço do carro com o percentual de impostos: " .$valcImp ."<br />"    
    ."Preço final do veículo: " .$total ."<br />"
    ."<hr />";

?>
</body>
</html>