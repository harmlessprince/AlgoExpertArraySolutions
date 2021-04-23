<?php
//1. Using hash table 
$input = [3, 5, -4, 8, 11, 1, -1, 6];
$target = 10;
//  function TwoSumHashTbale(array $nums, int $target_num) : array
// {
//     $hashTable = [];
//     foreach ($nums as $num) {
//        $potentialMatch = $target_num - $num;
//        if (in_array($potentialMatch, $hashTable)) {
//           return [$potentialMatch, $num];
//        }
//        array_push($hashTable, $num);
//     }
//     return [];
// }

function TwoSumForLoop(array $nums, int $target_num): array
{
    for ($i = 0; $i < count($nums) - 1; $i++) {
        $firstNum = $nums[$i];
        for ($j = $i+1; $j < count($nums); $j++) {
            $secondNum = $nums[$j];
            if ($firstNum + $secondNum == $target_num) {
             return [$firstNum, $secondNum];
            }
        }
    }
    return [];
}

print_r(TwoSumForLoop($input, $target));
