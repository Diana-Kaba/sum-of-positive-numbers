<?php
$arr = [
    [-5, 1, 2, -6, 11],
    [-29, 56, -288, 2560, -34],
];

$pos;

for ($i = 0; $i < count($arr); $i++) {
    for ($k = 0; $k < count($arr[$i]); $k++) {
        if ($arr[$i][$k] > 0) {
            $pos[] = $arr[$i][$k];
        }
    }
}

$sum = array_sum($pos);

echo "Сума позитивних чисел - $sum";
