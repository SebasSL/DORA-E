<?php
$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');

$mode = $_POST["mode"];
$sql= "UPDATE `movements` SET `Mode`='".$mode."' WHERE `ID`=1";
$result = mysqli_query($connect, $sql);
mysqli_query($connect, $sqli);
echo $mode;
?>