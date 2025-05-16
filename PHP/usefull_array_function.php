<?php
$x = [
    [
        "number" => "1",
        "name" => "Test 1",
        "age" => "19"
    ],
    [
        "number" => "2",
        "name" => "Test 2",
        "age" => "20"
    ]
];

// Only get array num n, without un-array it (hide other row)
$xx = array_filter($x, fn($a) => $a == 0, ARRAY_FILTER_USE_KEY);
$xx = array_filter($x, function ($a) { return $a == 0; }, ARRAY_FILTER_USE_KEY);

// Get array keys from $xx, result will be an array
$xxx = array_keys(current($xx));

// Transpose array $x (index will be discarded)
$y = array_map(null, ...$x);