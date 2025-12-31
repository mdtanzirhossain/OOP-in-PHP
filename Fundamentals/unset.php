<?php

$person = [
    'name' => 'Nayem',
    'city' => 'Dhaka',
    'phone' => '12344567677',
];

unset($person['name']);
print_r($person);
