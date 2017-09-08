<?php
$sensor = $_POST['sensor'];
#$sensor = "sensor1";
$output = '' ;
$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');
$sql= "SELECT `".$sensor."` FROM `sensorvalues`";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$output = $row[$sensor];
echo $output;
?>