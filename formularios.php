<?php 
		include 'header.php';
		$aula_atual = 'formularios';
	?>


	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		

		<h3>Envie seus dados</h3>
		



		<form action="valida-formularios.php" method="get">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field">
			<br><br>
			
			E-mail: *
			<br>
			<input type="email" name="email" class="field">
			<br><br>

			<input type="submit" name="submit" class="submit"><br>

		</form>
		

		



		

		

		
		








		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>