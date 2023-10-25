<html>
	<head>
		<Title>Lista de exercícios 1 PHP</title>
	</head>
<body>

<?php	
		// 18 - Um trabalhador recebeu seu salário e o depositou em uma conta bancária. Esse trabalhador realizou dois saques e agora deseja saber o seu saldo atual. Sabe-se para cada operação bancária de retirada paga de imposto 0,38% e o saldo inicial da conta era zero.

				$salariodpst = 2500;
				$saque1 = 370;
				$saque2 = 430;
				$saqimp1 = $saque1 * (0.38/100);
				$saqimp2 = $saque2 * (0.38/100);
				
				$imposto = $saqimp1 + $saqimp2;
				
				$saldoatual = $salariodpst-$saque1-$saque2-$imposto;
				
			echo "18 - Um trabalhador recebeu seu salário e o depositou em uma conta bancária. Esse trabalhador realizou dois saques e agora deseja saber o seu saldo atual. Sabe-se para cada operação bancária de retirada paga de imposto 0,38% e o saldo inicial da conta era zero."."<p>";
			
			echo "Salário Depositado = ".$salariodpst."<br/>"
			."Primeiro Saque = ".$saque1."<br/>"
			."Segundo Saque = ".$saque2."<br/>"
			."Imposto = ".$imposto."<br/>"
			."Saldo atual= ".$saldoatual."<br/>"
			."<hr/>"
	?>
	
</body>
</html>