<html>
<head>
<title>Lista_1 </title>
</head>
<body>

<?php
    echo "LISTA DE EXERCÍCIOS 01 - NOME 01: Alessandro Santos NOME 02: Kaique Aleixo NOME 03: Pedro Gomes." ."<p>";
    
// 14 - Faça um programa que receba o ano de nascimento de uma pessoa e ano atual, calcule e mostre: A - a idade dessa pessoa; B - quantos anos ela terá em 2050.

$nasc = 2003;
$atual = 2022;
$futuro = 2050;

$res1 = ($atual-$nasc);
$res2 = ($futuro-$nasc);

    echo "// 14 - Faça um programa que receba o ano de nascimento de uma pessoa e ano atual, calcule e mostre: A - a idade dessa pessoa; B - quantos anos ela terá em 2050." ."<p>";

    echo
    "Você nasceu em: " .$nasc ."<br />"
    ."Sua idade atualmente: " .$res1 ."<br />"    
    ."Sua idade em 2050 será: " .$res2 ."<br />" 
    ."<hr />";

?>
</body>
</html>