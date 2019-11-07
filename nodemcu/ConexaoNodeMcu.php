<?php

try {
    $host="br446.hostgator.com.br";
    $db="espa1321_dbnodemcu";
    $user="espa1321_estacio";
    $senha="estacio";
    
    
    
    
   // $stmt = $conn->prepare("INSERT INTO dados_mcu (leituraSensorUm,leituraSensorDois,leituraSensorTres) VALUES (?,?,?)");

   //$conn =new PDO("mysql:host=".$host.";dbname =".$db,$user,$senha);
   $conn=new PDO("mysql:dbname=".$db.";host=".$host,$user,$senha);
   echo"conectado com sucesso estou na conexão nodemcu";

   
    
} catch (PDOException $erro){

    echo"Erro na conexão com o Banco de Dados" . $erro->getMenssage();
}





?>
