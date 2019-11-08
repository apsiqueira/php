<?php 

	// ******* ATENÇÃO ********
	// COLE ESTE ARQUIVO NA MESMA PASTA DOS ARQUIVOS DO CURSO
	// PARA PUXAR O HEADER.PHP E O CSS
	// ************************
	
	include 'header.php';
	$aula_atual = 'loops-for-while';

?>


	<body>

		<h2>EXERCÍCIO: LOOPS WHILE e FOR</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
		

		<h3>Agora é a sua vez</h3> 

		<p>Use o loop for ou while para apresentar os anos em que vão haver Copa do mundo e Olímpiadas, até 2050.</p>
		<br>

		<?php
			$ano_valid_copa = 1930;
			$ano_valid_olimpiada = 1896;
			$ano_atual = date("Y");
			$primeiro_copa = $ano_atual;
			$primeiro_olimpiada = $ano_atual;

			// pegar o próximo ano de copa a partir do ano atual. Para isso vamos subtrair o ano atual do ano da primeira copa (1930). Se
			// esse resultado dividido por 4 der um número exato (ou seja, resultado % 4 = 0), sabemos que estamos em ano de copa,
			// senão ele entra no loop while até encontrar o próximo ano de copa. 
			// lembrando que '%' é o operador módulo, que retorna o resto da divisão. Neste caso estamos procurando o resto = 0. 

			while ((($primeiro_copa - $ano_valid_copa) % 4) != 0) {
				$primeiro_copa++;
			}

			// pegar o primeiro ano de olimpíadas a partir do ano atual. Mesma lógica do ano da copa.
			while ((($primeiro_olimpiada - $ano_valid_olimpiada) % 4) != 0) {
				$primeiro_olimpiada++;
			}


		?>


		<h4>Anos de Copa do Mundo: </h4>

		<p>
			<ul>
				<!-- Soltar os anos de Copa, acrescendo 4, até chegar a 2050 -->
				<?php for ($a = $primeiro_copa ; $a <= 2050 ; $a += 4) { ?> 
					<li>
						<?php echo $a ?>
					</li>
				<?php } ?>
			</ul>
		</p>
		<br>

		<h4>Anos de Olimpíadas: </h4>

		<p>
			<ul>
				<!-- Soltar os anos de Olimpíada, acrescendo 4, até chegar a 2050 -->
				<?php for ($a = $primeiro_olimpiada ; $a <= 2050 ; $a += 4) { ?> 
					<li>
						<?php echo $a ?>
					</li>
				<?php } ?>
			</ul>
		</p>

		<br>

	


	</body>

</html>