<?php
$connect = mysqli_connect('localhost','root','','dora-e');

$Direc = $_POST["action"];
$sql= "UPDATE `movements` SET `direction`='".$Direc."' WHERE `ID`=1";
$result = mysqli_query($connect, $sql);
?>