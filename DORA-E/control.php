<?php
$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');

$Direc = $_POST["direc"];
$sql= "UPDATE `movements` SET `direction`='".$Direc."' WHERE `ID`=1";
$result = mysqli_query($connect, $sql);
echo $Direc;
?>