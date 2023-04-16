<?php
//require_once('config.php');

$con = new mysqli("localhost", "root", "", "workafford");

$q = "SELECT * FROM ABC";

if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["Id"] . ";" . $row["Name"] . ";" . $row["Aurname"] . $row["Account_number"] . "<br/>";
else
echo $con->errno . " " . $con->error;

?>