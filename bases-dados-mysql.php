	<?php

	use PhpParser\Node\Stmt\Echo_;
use Symfony\Component\Console\Helper\Table;

include 'header.php';
	include 'functions/functions.php';
	$aula_atual = 'base-dados-mysql';
	?>


	<body>


		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>MySQLi</h3>
		<?php
		$server = "127.0.0.1";
		$user = "root";
		$password = "5122";
		$dbname = "bd_udemi";
		$port = 3306;


		$db_conection = new mysqli($server, $user, $password, $dbname, $port);

		if ($db_conection->connect_error == true) {
			echo "fail in conection";
		} else {
			echo "Conected is suscefull";
			echo '<br>';


			//  $sql =" INSERT INTO cliente (nomeCliente,email) values('Rogerio Primata', 'auior@gmail.com')" ;

			//  if($db_conection->query($sql)==true){

			// 	echo "Dados inseridos com Sucesso".'<br>';
			//  }
			//  else {
			// 	echo "Dados não form inseridos no banco".'<br>';
			//  };

			$selectAllClientes = "call selectAllClientes";

			$result = $db_conection->query($selectAllClientes);?>
			<table>
				<tr>
                    <th>Nome</th>
					<th>Email</th>
			

				</tr>
				

		<?php	while($line= $result->fetch_assoc()){?>
				
			<tr>
                  <td><?php echo $line["nomeCliente"]; ?> </td>
                  <td> <?php echo $line ["email"]; ?> </td>

			</tr>
				


		<?php 	}?>
			</table>

			


		


		<?php } ?>
  	<?php include 'functions/bottom_index.php'; ?>


	</body>

	</html>