<?php
$list = [
    [
        'price' => 9.99,
        'qty' => 3
    ],
    [
        'price' => 10.99,
        'qty' => 2
    ],
    [
        'price' => 4.99,
        'qty' => 5
    ],
];
$total = array_reduce($list, fn($sum, $item) => $sum + $item['qty'] * $item['price']);
echo "<bre/>";
print_r($total);
echo "<bre/>";
