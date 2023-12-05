<?php
// 税金を返す
function intax($value) {
    return ceil($value * 1.1);
}

$price = 100;
$price_tax = intax($price);
echo $price_tax;
?>