<?php

$weight = $_POST["weigth"];
$units = $_POST["units"];
$result = ($units*12)/($weight*0.68);
echo "Promillen er: ". $result. "For mænd";

?>
