<?php
$host=
$db="espa1321_dbnodemcu";
$user=
$senha=

$conn = new mysqli($host,$user,$senha,$db);



    if($conn->connect_error){

        echo "Error :".$conn->connect_error;
       



    }
    


$stmt = $conn->prepare("INSERT INTO dados_mcu (leituraSensorUm,leituraSensorDois,leituraSensorTres) VALUES (?,?,?)");


$stmt->bind_param("sss",$valorUM,$valorDois,$valorTres);
$valorUM="um";
$valorDois="dois";
$valorTres="tres";
$stmt->execute();
var_dump($conn);





?>
