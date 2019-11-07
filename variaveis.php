<?php
include 'header.php';
$aula_atual = 'variaveis';
?>


<body>
<!-- 
valor constante  -->
<?php 
define('pi',3.141312);

?>



	<h2>VARIÁVEIS E CONSTANTES</h2>

	


	<hr>

	<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
	<br>
      
	<h3>Apresentar valor de variáveis</h3>
      
	<h2>Exemplo de constante : define("nomeDoCampo,valorDocampo")<br>
	Exemplo abaixo ja foi definido no inicio do codigo e somado mais 10
	</h2>
	<?php 
	echo pi+10;
	
	?>
     <br>
	<?php
	$nome = 'joao';
	$saldo = 300;

	?>

	<?php

	?>

	<h4>Nome: </h4>
	<p><?php
		echo $nome;

		?></p>

	<br>

	<h4>Saldo: </h4>
	<p>
		<?php
		echo $saldo;

		?>

	</p>


	<br>

	<h4>Mensagem: </h4>
	<p>
		<?php 
		echo "Ola $nome seu saldo e de : $saldo";
		
		?>
	</p>







	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>