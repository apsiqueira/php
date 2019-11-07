<?php

try {
    $host="br446.hostgator.com.br";
    $db="espa1321_dbnodemcu";
    $user="espa1321_estacio";
    $senha="estacio";
    
    
    
    
   // $stmt = $conn->prepare("INSERT INTO dados_mcu (leituraSensorUm,leituraSensorDois,leituraSensorTres) VALUES (?,?,?)");

   $PDO =new PDO("mysql:host=" .$host. ";dbname =" .$db .";charset=utf8",$user,$senha);
    
   
    
} catch (PDOException $erro){

    echo"Erro na conexão com o Banco de Dados" . $erro->getMenssage();
}





?>