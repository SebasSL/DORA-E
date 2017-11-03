<?php
$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');

$time = microtime();
$time = $time." ";

$Direc = $_POST["direc"];
$sql= "UPDATE `movements` SET `direction`='".$Direc."' WHERE `ID`=1";
$result = mysqli_query($connect, $sql);
$sqli= "INSERT INTO `test` (`movement`, `t_inicial` , `end` , `t_final` ) VALUES ( '".$Direc."' , '".$time."' , 0 , 0)";
mysqli_query($connect, $sqli);
echo $Direc;
?>