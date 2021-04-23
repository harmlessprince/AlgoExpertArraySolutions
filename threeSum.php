<?php
//Threesum Algorithm

function threeSum(array $inputs, int $target): array
{
    $arrayLenght = count($inputs);
    if ($arrayLenght < 3) {
        return [];
    }
    sort($inputs);
    $tripplets = [];
    for ($i = 0; $i < $arrayLenght  - 2; $i++) {
        $left = $i + 1;
        $right = $arrayLenght - 1;
       
        while ($left < $right) {
            $currentSum = $inputs[$i] + $inputs[$left] + $inputs[$right];
            if ($currentSum === $target) {
               array_push($tripplets,  [$inputs[$i], $inputs[$left], $inputs[$right]]);
                $left++;
                $right--;
            }
            if ($currentSum > $target) {
                $right--;
            }
            if ($currentSum < $target) {
                $left++;
            }
        }
    }
    # code...#
    return $tripplets;
}
$inputs = [5, 3, 6, -8, -6, 1, 12, 2];
print_r(threeSum($inputs, 5));
