<?php
$arr = [
    [-5, 1, 2, -6, 11],
    [-29, 56, -288, 2560, -34],
];

function isPositive($number) {
    return $number > 0;
}

$pos = array_filter($arr, function($subArray) {
    return array_filter($subArray, 'isPositive');
});

$sum = array_sum(array_merge(...$pos));
echo "Сума позитивних чисел - $sum";

// for ($i = 0; $i < count($arr); $i++) {
//     for ($k = 0; $k < count($arr[$i]); $k++) {
//         if ($arr[$i][$k] > 0) {
//             $pos[] = $arr[$i][$k];
//         }
//     }
// }
// $sum = array_sum($pos);
