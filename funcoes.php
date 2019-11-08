	<?php
	include 'header.php';
	include 'functions/functions.php';
	$aula_atual = 'funcoes';
	?>


	<body>


		<h2>FUNÇÕES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Função simples sem argumento</h3>
		<?php
		function ola_mundo()
		{
			echo "ola mundo";
			echo "<br>";
			echo "fim da função";
		}

		ola_mundo();
		?>




		<h3>Função com argumentos</h3>


		<?php
		function soma($num1, $num2)
		{

			$soma = $num1 + $num2;
			echo $soma;
		}

		soma(5, 3);

		?>


		<h3>Função com argumento e valor default</h3>


		<?php

		function chamdaOla($nome = null)
		{
			echo "ola {$nome} como vai!";
		}
		chamdaOla("pablo");
		echo "</br>";
		chamdaOla();


		?>

		<?php

		function mediaEscolar()
		{

			return (6 / 2);
		}

		?>
		<br>
		<?php
			$pegandoMedia=mediaEscolar();
			echo $pegandoMedia;
		?>

	


		<h3>echo ou return?</h3>
















		<?php include 'functions/bottom_index.php'; ?>


	</body>

	</html>