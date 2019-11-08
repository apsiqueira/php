<?php
include 'header.php';
$aula_atual = 'strings';
?>


<body>

	<h2>STRINGS</h2>
	<hr>
	<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

	<h3>String é uma sequência de caracteres</h3>

	<?php $str = "Eu sou um string"; ?>

	<h4>Valor da variável:</h4>
	<p>

		<?php
		var_dump($str)
		?>

	</p>
	<br>

	<h4>Número de caracteres:</h4>
	<p>
		<?php
		echo strlen($str);
		?>
	</p>
	<br>

	<h4>Primeiro caractere:</h4>
	<p>

		<?php
		echo $str[0];

		?>
	</p>
	<br>

	<h4>Último caractere:</h4>
	<p>
		<?php
		echo $str[-1];
		?>
	</p>
	<br>

	<h4>Como extrair parte de um string:</h4>
	<p>
		<?php

		echo substr($str, 0, 8);

		?>


	</p>

	<h3>Exemplo do IBAN - Trabalhando com Strings</h3>

	<?php
	$iban = "pt50000067263827616176433";
	$status = "Ativo";
	$senha = "45p87a06";
	?>

	<h4>Número do IBAN:</h4>



	<p>
		<?php
		echo $iban;

		?>


	</p>
	<br>


	<h4>Código do País:</h4>
	<p>
		<?php
		echo substr($iban, 0, 2);

		?>


	</p>
	<br>

	<h4>Número da conta:</h4>
	<p>
		<?php
		echo substr($iban, 3)." (status : ".$status.")";
		?>


	</p>
	<br>


	<?php

	$email = "      ivanlourencogomes@gmail.com  ";
	$site = "http://www.ivanlourencogomes.com"

	?>

	<h3>Como limpar strings</h3>




	<h4>Email:</h4>
	<p >
		<?php 
		echo trim($email);
		?>


	</p>
	<br>

	<h4>Site:</h4>
	<a href=" <?php echo $site ?>">
	<?php 
	
	echo trim($site,"http://");
	?>
  

	</a>
	<br>


	<h3>Agora é a sua vez</h3>

	<p>Use este espaço para testar novas funções com strings.</p>
	<br>
	 <?php 
	 $arr1 = str_split($str);

	
	 foreach($arr1 as $value){
      echo "{$value} /";
		 
	 } 
	 echo"<br>";
	 
	 foreach($arr1 as $value){
	 
	echo var_export($value);
	// echo is_string();



	 }


   echo"GNOME vs Trolls Before we start with the {$value} , I’d like to bring this to everyone’s attention: https://www.gnome.org/news/2019/10/gnome-files-defense-against-patent-troll/ We are standing on the shoulders of giants, and among them GNOME is probably the tallest. Ubuntu provides an amazing base for us to build upon. If tomorrow they were to disappear it would be a tragedy […]"
	; ?>

     




	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>