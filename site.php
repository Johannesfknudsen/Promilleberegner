i<?php

$weight = $_POST["weight"];
$units = $_POST["units"];
$man = $_POST["Man"];
$woman = $_POST["Woman"];
if ($man == true) {
    $fluid = 0.68;
<<<<<<< HEAD:side.php
}
if ($woman == true) {
      $fluid = 0.55;
=======
} else {
    if ($woman == true) {
        $fluid = 0.55;
    }
>>>>>>> 1b17e8f6b7fa2244f85e4f9f1da58971fd00ff3b:site.php
}
echo $fluid;
$result = ($units * 12)/($weight * 0.68);
echo "Promillen for mænd er: " . $result;<
?>
