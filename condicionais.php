<?php
include 'header.php';
$aula_atual = 'condicionais';
?>


<body>

	<h2>CONDICIONAIS</h2>
	<hr>
	<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

	<h3>Selecione o produto:</h3>

	<?php

	$produtos = array(
		array(
			'nome' => 'Laptop Lenovo Ideapad Core i7 32GB',
			'estoque' => 12
		),

		array(
			'nome' => 'Laptop ASUS X441NA3350 Celeron N3350 16GB',
			'estoque' => 6
		),

		array(
			'nome' => 'Laptop HP BS013DX Core i5 8GB',
			'estoque' => 1
		),

		array(
			'nome' => 'Dell Inspiron I7373 Core i7 8GB',
			'estoque' => 0
		)

	)

	?>

	<select>
		<option>Nenhum produto selecionado</option>
		//desabilitando item que estja com estoque zerado

		<?php foreach ($produtos as $item) { ?>

			<option <?php if ($item['estoque'] == 0) {
							echo "disabled";
						} ?>><?php echo $item['nome']; ?>
				<?php if ($item['estoque'] == 0) {
						echo '(Produto Indisponivel)';
					} else {
						echo '(Em estoque)';
					}
					?>
			</option>

		<?php } ?>

	</select>



	<h3>Agora é a sua vez</h3>

	<p>Apague todo o código acima e tente recriá-lo desde o começo. Crie um array com outros produtos, faça o loop foreach para criar o select box e depois use os condicionais para desabilitar os itens que não estão em estoque.</p><br>

	<?php
	$estoque = array(
		array(
			"idProd" => "01",
			"nomeProd" => "loção cabelo",
			"estoque" => 300
		),
		array(
			"idProd" => "02",
			"nomeProd" => "creme pele",
			"estoque" => 10
		),
		array(
			"idProd" => "03",
			"nomeProd" => "esmalte",
			"cor" => "vermelho",
			"estoque" => 0
		)



	)
	?>
    <h3>produto</h3>
	<p>

	<select >
		<?php  foreach($estoque as $prod){?>
			<option <?php if($prod["estoque"] == 0){
				echo "disabled";
			}?>><?php echo $prod["nomeProd"];?>
			<?php if($prod["estoque"]==0){echo "(Não Disponivel)";} ?>
		
		
		
		</option>


		<?php  }?>


	</select>
	



	</p>
	<br>




	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>