<?php

$weight = $_POST["weight"];
$units = $_POST["units"];
$man = $_POST["Man"];
$woman = $_POST["Woman"];
if ($man == true) {
    $fluid = 0.68;
}
if ($woman == true) {
      $fluid = 0.55;
}
echo $fluid;
$result = ($units * 12)/($weight * 0.68);
echo "Promillen for mænd er: " . $result;
?>
