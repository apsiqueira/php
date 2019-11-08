<?php
include 'header.php';
$aula_atual = 'operacoes-arrays';
?>


<body>

	<h2>OPERAÇÕES COM ARRAYS</h2>
	<hr>
	<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

	<?php

	$alunos = array(
		array(
			'matricula' => '98855',
			'nome' => 'João Fernando Oliveira',
			'ano_nasc' => 1980,
			'cidade' => 'São Paulo'
		),

		array(
			'matricula' => '98844',
			'nome' => 'Letícia Maria Gomes',
			'ano_nasc' => 1992,
			'cidade' => 'Teresópolis'
		),
		array(
			'matricula' => '98840',
			'nome' => 'Carlos Henrique Matos',
			'ano_nasc' => 1976,
			'cidade' => 'Belo Horizonte'
		),
		array(
			'matricula' => '98837',
			'nome' => 'Fernando Costa',
			'ano_nasc' => 1996,
			'cidade' => 'São Paulo'
		)

	);

	?>


	<h3>Array Push</h3>

	<?php
	$alunoNovo = array();
	$alunoNovo['matricula'] = '30019';
	$alunoNovo['nome'] = 'Ademir Pablo';
	$alunoNovo['ano_nasc'] = 1982;
	$alunoNovo['cidade'] = 'Juiz de Fora';

	//adicionado ao array alunos um novo aluno com a função array_push
	array_push($alunos, $alunoNovo);
	// apresentando o conteudo de um array em uma taq pre
	echo "<pre>";
	print_r($alunos);
	echo "</pre>";
	

	?>

	<?php

	$alunos_90 = array();

	foreach ($alunos as $aluno) {

		//populando um nova array onde o index dele sera a matricula do aluno

		if ($aluno['ano_nasc'] >= 1990) {
			$alunos_90[$aluno['matricula']] = array();
			$alunos_90[$aluno['matricula']]['nome'] = $aluno['nome'];
			$alunos_90[$aluno['matricula']]['ano_nasc'] = $aluno['ano_nasc'];
			$alunos_90[$aluno['matricula']]['cidade'] = $aluno['cidade'];
		}
	}

	?>
	<pre>

    </pre>



	<h4>Alunos Nascidos depois de 1990: </h4>
	<br>
	<pre>
		<?php

		print_r($alunos_90);
		?>

	</pre>




	<h3>Array Keys</h3>
	<?php

	?>

	<h4>Matrícula dos Alunos Nascidos depois de 1990: </h4>
	<br>

	<?php print_r(array_keys($alunos_90)); ?>
	

	
  




	<h3>In Array</h3>

	<?php
	$matricula = '98837';
	?>
	<br>

	<h4>Busca de aluno por matrícula: </h4>
	<br>
	<p>
		<?php 
		echo"A matricula {$matricula} pertence ao aluno(a) {$alunos_90[$matricula]["nome"]}, nascido(a) em {$alunos_90[$matricula]['ano_nasc']} "
		
		?>



	</p>














	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>