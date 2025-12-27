<?php

// null ?? default;
// if there is a value in the first place, the 1st one will be selected.
// if the 1st value is null, then 2nd value will be selected.

$customer1 = null;
$result = $customer1 ?? "Visitor\n";
echo $result;

$customer2 = "Abdullah";
$result = $customer2 ?? "Visitor";
echo $result;

// In real life it is used for coupon code.