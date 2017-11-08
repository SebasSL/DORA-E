<?php
$output = '' ;
$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');
$sql= "SELECT latitude, longitude FROM destination";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$output .= $row["latitude"];
$output .= ",";
$output .= $row["longitude"];
$output .= ",";
$sql= "SELECT latitude, longitude FROM sensorvalues";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$output .= $row["latitude"];
$output .= ",";
$output .= $row["longitude"];
echo $output;
?>