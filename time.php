<?php


// Imprime algo como: Monday 8th of August 2005 03:12:46 PM
//echo date('h:i:s');
$ID_old = $_POST['id'];
$out = $ID_old;
$time = microtime();
$time = $time." ";

$connect = mysqli_connect('localhost','root','Pitico123','DORA-E');

$sql= "SELECT `end` , `ID`  FROM `test` ORDER BY `ID` DESC ";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$end = $row["end"];
$ID = $row["ID"];

if ($ID > $ID_old ) {
	if ($end > 0 ) {
		$sqlu = "UPDATE `test` SET `t_final`='".$time."' WHERE `ID`= '".$ID."' ";
		$result = mysqli_query($connect, $sqlu);
		$out = $ID;
	}
}

echo $out;
?>