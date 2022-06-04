<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $a * $b;

echo "Hasil perkalian adalah {$c}";//petik ganda

echo ' Hasilnya '.$c; //petik tunggal

/*
 * output json
 */
$reply = [
    'a' => $a,
    'b' => $b,
    'hasil' => $c,
];
header('Content-Type :application/json');
echo json_encode($reply);