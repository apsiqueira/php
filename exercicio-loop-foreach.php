<?php 
        
    // ******* ATENÇÃO ********
    // COLE ESTE ARQUIVO NA MESMA PASTA DOS ARQUIVOS DO CURSO
    // PARA PUXAR O HEADER.PHP E O CSS
    // ************************

    include 'header.php';
?>


	<body>

		<h2>EXERCÍCIO: LOOP FOREACH</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

            <h3>Agora é a sua vez</h3>

                    <p>Crie um Array, de preferência multidimensional, e solte as informações de cada item deste array em uma lista usando o loop foreach.</p>
                    <br>

                        <?php 

                            $livros = array(
                                            array(
                                                "vendas" => 689,
                                                "titulo" => "Our Mutual Friend",
                                                "autor" => "Charles Dickens",
                                            ),
                                            array(
                                                "vendas" => 980,
                                                "titulo" => "Crime & Punishment",
                                                "autor" => "Fiódor Dostoiévski",
                                            ),
                                            array(
                                                "vendas" => 765,
                                                "titulo" => "Dom Casmurro",
                                                "autor" => "Charles Dickens",
                                            ),
                            ); 
                        ?>

                        <ul>

                            <?php foreach ($livros as $item) { ?>

                                <li>
                                    Título: <?php echo $item['titulo']; ?><br>
                                    Autor: <?php echo $item['autor']; ?><br>
                                    Unidades vendidas: <?php echo $item['vendas']; ?><br>
                                </li><br>

                            <?php } ?>

                        </ul>


    </body>

</html>