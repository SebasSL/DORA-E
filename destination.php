<?php
$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');

$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$sql= "UPDATE destination SET latitude = '".$latitude."' , longitude = '".$longitude."'";
mysqli_query($connect, $sql);
?>