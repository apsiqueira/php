<?php 
		include 'header.php';
		$aula_atual = 'include-require';
	?>


	<body>


		<h2>Include e Require</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		

		<h3>Include</h3>
		
		<?php 


	

		?>


		<p><?php ?></p>
		<br>




		<h3>Componente galeria de fotos</h3>
		<?php

			$photoGallery = array (
				
				'img/prato_1.jpg',
				'img/prato_2.jpg',
				'img/prato_3.jpg',
				'img/prato_4.jpg'

			);

			include 'components/photoGallery.php'
			
			

		?>


		<?php 
		
		$photoGallery = array (
				
			'img/prato_5.jpg',
			'img/prato_6.jpg',
			'img/prato_7.jpg',
			'img/prato_8.jpg'

		);

		include 'components/photoGallery.php'
		
		
		
		
		
		
		
		
		?>
		
		

		



		

		

		
		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>