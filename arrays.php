<?php
include 'header.php';
$aula_atual = 'arrays';
?>


<body>

	<h2>ARRAYS</h2>
	<hr>
	<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


	<h3>Meus Cursos</h3>
	<?php
	$cursos = array(
		"curso1" => array(

			"Título" => "excel",
			"Número de Avaliações" => 5000,
			"url" => "http://www.ademirpablo.com.br",
			"URL da foto" => "teste"

		),


		"curso2" => array(
		
			"Título" => "word",
			"Número de Avaliações" => 5000,
			"url" => "http://www.ademirpablo.com.br",
			"URL da foto" => "teste"

		),
		"curso3" => array(
	
			"Título" => "excel",
			"Número de Avaliações" => 5000,
			"url" => "http://www.ademirpablo.com.br",
			"URL da foto" => "teste"

		),
	);

	?>

	<ul>
		 <?php foreach($cursos as $value){?>

            <li>
		  <a href="<?php echo $value["url"]?>"> <?php echo  $value["Título"]."<br>"?></a>
		   <?php echo $value["Número de Avaliações"]."<hr>"?>
		  

			</li>
			<br>



		 <?php }?>




	</ul>



	<h4>Conteúdo do Array: </h4>
	<p><?php
		//   foreach($cursos as $curso){

		// 	echo $curso." , ";

		//   }

		// foreach($cursos as $value){
		// 	echo  $value["Título"];
		// 	echo "<br>";     

        
		// }

	

		// ?></p>
	<br>


	<h3>Informação do Curso</h3>

	<h4>Título: </h4>
	<p><?php 
	echo $cursos["curso1"]["Título"];
	
	?></p>
	<br>

	<h4>Número de Avaliações: </h4>
	<p><?php 
	echo $cursos["curso1"]["Número de Avaliações"]; ?></p>
	<br>

	<h4>URL: </h4>
	<p><?php 
	
	echo $cursos["curso1"]["url"] ;
	?></p>
	<br>

	<h4>URL da foto: </h4>
	<p><?php  ?></p>
	<br>


	<h3>Agora é a sua vez</h3>

	<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
	<br>






	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>