<?php
$number = 1.3333333;

$round = round($number,4);

$check = 1.3333;

if($check==$round) {
    echo "equal";
} else {
    echo "not equal";
}

?>