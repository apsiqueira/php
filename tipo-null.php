	<?php
	include 'header.php';
	include 'functions/functions.php';
	$aula_atual = 'tipo-null';
	?>


	<body>


		<h2>NULL</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>NULL = Ausência de valor</h3>
		<?php
		$vazia = "null";

		


		$posts = "";
		var_dump($vazia);
		echo"<br>";
		if ($posts == null) {
			echo "variavel e null";
		}
		else{

			echo "variavel nao e null";
			echo "<br>".$posts;
		}


		?>


		<h3>Resultado da pesquisa</h3>



		<h3>Agora é a sua vez</h3>

		<p>Crie um Array, de preferência multidimensional, e solte as informações de cada item deste array em uma lista usando o loop foreach.</p>
		<br>









		<?php include 'functions/bottom_index.php'; ?>


	</body>

	</html>