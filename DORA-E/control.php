<?php
$connect = mysqli_connect('35.161.176.110:3306','Dante','Pitico123','DORA-E');

$Direc = $_POST["action"];
$sql= "UPDATE `movements` SET `direction`='".$Direc."' WHERE `ID`=1";
$result = mysqli_query($connect, $sql);
?>