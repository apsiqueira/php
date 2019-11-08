	<?php

use PharIo\Manifest\Email;

include 'header.php';
	$aula_atual = 'valida-formularios';
	?>



<?php 
function clean_input($data){
//retira espaço em branco
$data_cleared=trim($data);
//retira barras invertidas
$data_cleared=stripslashes($data_cleared);
//retira caracteres especiais 
$data_cleared=htmlspecialchars($data_cleared);

return $data_cleared;

}
?>

	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Envie seus dados</h3>
		<pre>
	   <?php
		$erro_nome = null;
		$erro_email = null;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				echo "recebido via post";
				$nome = $_POST["nome"];
				$email = $_POST["email"];

				if ($nome == "") {
					$erro_nome = "O nome e obrigatorio";
				} elseif ($email == "") {
					$erro_email = "Dados de email obrigatorio";
				}
				elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false) {
					$erro_email = "Email e invalido";


				}else { 
					$nome=clean_input($nome);
					$email=clean_input($email);			
				
				}
			} 

		// print_r($_SERVER["REQUEST_METHOD"]);


		?>


      </pre>




		<form action="valida-formularios.php" method="post">

			Nome: *
			<br>
			<input type="text" name="nome" class="field">
			<br>
			<div class="erro-form">
				<?php echo $erro_nome;
				?>

			</div>
			<br>

			E-mail: *
			<br>
			<input type="email" name="email" class="field">
			<br>
			<div class="erro-form">
				<?php echo $erro_email
				?>

			</div>


			<br>

			<input type="submit" name="submit" class="submit"><br>
			<div class="sucesso-form">

			</div>

		</form>

		<pre>

		 <?php
			echo "<p>Peguei o post </p>";
			print_r($_POST);

			echo "<p>Peguei o get </p>";
			print_r($_GET);
			?>


		</pre>


		<h3>Confirmaçao</h3>
		<p>Obrigado!</p>
		<?php 
		echo $nome;
		echo $email;
		
		?>



















		<?php include 'functions/bottom_index.php'; ?>


	</body>

	</html>