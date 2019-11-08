	<?php

	use Carbon\Traits\Week;
	use Symfony\Component\VarDumper\VarDumper;

	include 'header.php';
	include 'functions/functions.php';
	$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		<p>Segundos desde 1970 com time() :</p>
		<?php $agora = time();
		echo  var_dump($agora) . "<br>";

		?>
		<p>Segundos desde 1970 formatado com date() :</p>
		<?php $agora = time();

		//formatação e variavel contendo a data
		echo date("d/m/y", $agora) . "<br>";


		?>
		<p>Data de nascimento função mktime() :</p>
		<?php
		//funcao mk time recebe h,m,s,mes,dia,ano
		$nascimentoDaPessoa = mktime(0, 0, 0, 9, 30, 1982);
		echo $nascimentoDaPessoa . "<br>";

		echo date("d/m/y", $nascimentoDaPessoa);


		//formatação e variavel contendo a data


		?>
		<hr>
		<p>Data com strtotime() :</p>
		<?php

		$outraData1 = strtotime("30 sep 1982 +4 weeks monday 23:05:25");

		echo date("d-m-Y", $outraData1) . "<br>";
		echo date("d/m/Y", $outraData1) . "<br>";
		echo date("d m Y", $outraData1) . "<br>";
		echo date("d m Y H:i:s", $outraData1) . "<br>";
		?>

		<p>Pegar hora no servidor</p>
		<?php
		$hourServer = date_default_timezone_get();
		echo "This is time_zone into server :{$hourServer}" ?>

		<p>Mudar hora no servidor</p>
		<?php
		$hourCorrect = "America/Sao_Paulo";

		date_default_timezone_set($hourCorrect);
		echo "This is time_zone into server :{$hourCorrect}" ?>





		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
			$segundoAteHoje = time();
			echo $segundoAteHoje;
			echo '<br>';
			echo date('d m Y', $segundoAteHoje);

			?>

		</p>
		<br>

		<h3>Função mktime</h3>
		<?php
		$dataNascimento = mktime(21, 30, 45, 9, 30, 1982);
		echo date("d/m/y H : i : s", $dataNascimento);


		?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>



		<?php
		$dataTeste = strtotime("30 sep 1982");
		echo date("d/m/Y", $dataTeste);

		?>

		<p>

		</p>
		<br>


		<h3>Função date</h3>



		<?php
		$dataAtual = strtotime("now");
		echo date("d/m/Y H : i :s");

		?>

		<p>

		</p>
		<br>



		<h3>Fuso horário</h3>


		<?php
		$dateToServer = date_default_timezone_get();
		echo ($dateToServer);

		?>

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

	




		<?php
		$dataSaida = strtotime("01 nov 2019 ");
		$dataSaidaFormatada = date("d / m / Y ",$dataSaida);

		
		$dataPrevstaEntrega = strtotime("05 nov 2019");
		$dataFormatada = date("d/m/Y", $dataPrevstaEntrega);
		$dataEntrega= strtotime("08 nov 2019");

	    
   

		echo "Data saida entrega : {$dataSaidaFormatada}";
		echo '<br>';

		echo "Data prevista entrega : {$dataFormatada}";
		
		?>

			
			<p><?php 
			if($dataEntrega>$dataPrevstaEntrega){
				$atraso= ($dataEntrega-$dataPrevstaEntrega)/(60*60*24);
				?>
			  <h1>Atrasado</h1>
			  <?php 
			 echo " dias de atraso :{$atraso}";

			  ?>

			 <?php }
			 else{?>
			 <h1>No prazo</h1>


			 <?}
			 ?></p>

            

	

		<p>

		</p>
		<br>







		<h3>Tabela de caracteres da função date</h3>




		<?php include 'tabela-date.php'; ?>













		<?php include 'functions/bottom_index.php'; ?>


	</body>

	</html>