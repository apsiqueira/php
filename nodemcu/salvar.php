<?php  

include_once("ConexaoNodeMcu.php");


$sensor1=$_GET['sensor1'];
$sensor2=$_GET['sensor2'];
$sensor3=$_GET['sensor3'];



 
$sql ="INSERT INTO dados_mcu (leituraSensorUm,leituraSensorDois,leituraSensorTres) VALUES (:sensor1,:sensor2,:sensor3)";

//$sql="insert into dados_mcu(leituraSensorUm,leituraSensorDois,leituraSensorTres) values('".$sensor1."','".$sensor2."','".$sensor3."')";

//$sql='SELECT * from dados_mcu';
//var_dump($sql);

$stmt=$conn->prepare($sql);
$stmt->bindParam(":sensor1",$sensor1);
$stmt->bindParam(':sensor2',$sensor2);
$stmt->bindParam(':sensor3',$sensor3);

var_dump($sql);



if($stmt->execute()){
   
  
echo"Arquivo salvo com sucesso";


}else{

echo"<br>Erro no salvamento de informações";

}


?>
