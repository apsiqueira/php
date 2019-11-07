<?php 
		include 'header.php';
		$aula_atual = 'loops-for-while';
	?>


	<body>

		<h2>LOOPS WHILE e FOR</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Selecione o ano de nascimento:</h3>

		<?php 
		$anoAtual=date("Y");
		$ano =$anoAtual;
		
		?>

		<select>
			<option>Selecione o ano</option>
			 <?php 
			 while($ano>1900){ ?>
			 <option><?php echo $ano ;?></option>
			 <?php  $ano--;?>
			 <?php } ?>
		
		</select>

		<h3>Selecione o ano estimado de aposentadoria:</h3>

		<select>
			<option>Selecione o ano</option>
			<?php  
			for ($ano=$anoAtual; $ano <= 2050; $ano++) { 
				# code..			}?>
			 <option><?php echo $ano ;?></option>
		
			 <?php } ?>

			
		</select>

			

		<h3>Agora é a sua vez.</h3>

		<p>Use o loop for ou while para apresentar os anos em que vão haver Copa do mundo e Olímpiadas, até 2050.</p>

		<h4>Anos de Copa do Mundo: </h4>

		<p><?php 
		for ($ano=$anoAtual; $ano<=2050 ; $ano+=2 ){ 
			echo $ano;
			echo"<br>";
		}
		
		?></p>
		<hr>
         

		<br>
	
		

		<h4>Anos de Olimpíadas: </h4>
		<?php 
		$agora=date("Y");
		
		?>

		<p><?php 

		while($agora<=2050){
			echo $agora;
			$agora+=4;
			echo "<br>";

		}
		
		?></p>
		<br>

		





		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>