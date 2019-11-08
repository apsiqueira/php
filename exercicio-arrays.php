<?php 

	// ******* ATENÇÃO ********
	// COLE ESTE ARQUIVO NA MESMA PASTA DOS ARQUIVOS DO CURSO
	// PARA PUXAR O HEADER.PHP E O CSS
	// ************************
	
	include 'header.php';
	$aula_atual = 'superglobal-get';

?>


	<body>


		<h2>EXERCÍCIO: Arrays</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Agora é a sua vez</h3>

        <p>Crie um Array e solte as suas informações em sequência.</p>
        <br>


        <?php 
            $computador = array(
                "modelo" => 'Lenovo Ideapad 520-15IKB',
                "processador" => 'Intel Core i7',
                "ram" => '16 GB',
                "disco" => '1 TB'
            ); 
        ?>


        <h3>Informação do Computador</h3>

        <h4>Modelo: </h4>
        <p><?php echo $computador['modelo']; ?></p>
        <br>

        <h4>Processador: </h4>
        <p><?php echo $computador['processador']; ?></p>
        <br>

        <h4>Memória RAM: </h4>
        <p><?php echo $computador['ram']; ?></p>
        <br>

        <h4>Disco Rígido: </h4>
        <p><?php echo $computador['disco']; ?></p>
        <br>



	</body>

</html>