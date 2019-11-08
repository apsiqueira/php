	<?php
	include 'header.php';
	include 'functions/functions.php';
	$aula_atual = 'superglobal-get';
	?>


	<body>


		<h2>Variável Superglobal $_GET</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>




		<h3>$_GET</h3>

		<pre>
			<!-- formatado -->
	   <?php $produtoClicado = $_GET['iten']; ?>
	   </pre>

		<p>
			<!-- nao formatado -->
			<?php var_dump($_GET) ?>
		</p>
		<br>




		<?php
		$produtos = array(

			'1' => array(
				'nome' => 'Big Mac',
				'descricao' => 'O sanduíche duplo mais cobiçado no mundo inteiro. Feito com dois suculentos hambúrgueres 100% carne de vaca, queijo fundido, pepino, cebola, alface e um molho irresistível. Uma combinação única.',
				'calorias' => 503
			),

			'2' => array(
				'nome' => 'Hamburger',
				'descricao' => 'Simplesmente delicioso. Um hambúrguer 100% carne de vaca com pepino, cebola, mostarda e ketchup, aconchegado em dois pedaços de pão fofo e leve. Um clássico que sabe bem a qualquer hora.',
				'calorias' => 254
			),

			'3' => array(
				'nome' => 'Cheeseburger',
				'descricao' => 'O hambúrguer McDonald\'s encontrou uma fatia de queijo delicioso. A eles juntaram-se o pepino, a cebola, a mostarda e o ketchup. Estão reunidos os ingredientes para uma verdadeira festa de sabor.',
				'calorias' => 304
			),

			'4' => array(
				'nome' => 'McRoyal Deluxe',
				'descricao' => 'Coroado com sementes de sésamo, o McRoyal Deluxe tem todos os ingredientes para uma dentada luxuosa: carne 100% de vaca, rodelas de tomate, queijo Cheddar fundido e maionese aveludada.',
				'calorias' => 528
			),

			'5' => array(
				'nome' => 'McRoyal Cheese',
				'descricao' => 'O que mais se pode pedir? Todo o paladar do McRoyal com uma dupla camada de queijo Cheddar fundido. Ideal para os amantes de queijo.',
				'calorias' => 521
			)


		);
		?>
		
		<?php 
		$app="superglobal-get.php?";
		?>

         <ul>
			   <?php 
			   foreach($produtos as $chave => $descricao){?>
               
			<li> <a href="<?php echo "{$app}iten={$chave}" ;?>"><?php  echo $descricao['nome']?></a></li>

			   <?php }?>





		 </ul>

		<?php  ?>

		<h4>Produto: </h4>
		<p><?php
			echo $produtos[$produtoClicado]['nome']; ?></p>
		<br>

		<h4>Descrição: </h4>
		<p><?php
			echo $produtos[$produtoClicado]['descricao']; ?></p>
		<br>

		<h4>Calorias: </h4>
		<p><?php
			echo $produtos[$produtoClicado]['calorias']; ?></p>
		<br>

		<h4><u>Conheça nossos produtos</u></h4><br>

		<ul>
		</ul>



		<h3>Agora é a sua vez</h3>

		<p>Trabalhe com o array de camisetas. Passe o código do produto via URL, e use a variável $_GET para apresentar o nome do produto e os tamanhos disponíveis.</p>

		<?php

		$itens = array(
			'shirt_avg' =>  array(
				'nome' => 'Camiseta Avengers',
				'tamanhos' => array('XS', 'S', 'M', 'L', 'XL')
			),
			'shirt_batman' =>  array(
				'nome' => 'Camiseta Batman',
				'tamanhos' => array('S', 'M', 'L', 'XL')
			),
			'jacket_superman' =>  array(
				'nome' => 'Casaco Superman',
				'tamanhos' => array('M', 'L', 'XL', 'XXL')
			),
		);

		?>


		<br>

		<?php

		$itenSelecionado = $_GET['iten'];


		?>



		<h4>Produto: </h4>
		<p>solte o nome aqui</p>
		<?php
		echo $itens[$itenSelecionado]['nome'];


		?>



		<br>

		<h4>Tamanhos disponíveis: </h4>
		<p>solte os tamanhos aqui</p>





		<select>

			<?php foreach ($itens[$itenSelecionado]['tamanhos'] as $tamanho) {?> 

				<option> <?php echo $tamanho;?></option>
			
			
			<?php } ?>



		</select>











		<?php include 'functions/bottom_index.php'; ?>


	</body>

	</html>