<?php
function smallestDifference(array $firstArray, array $secondArray): array
{
    if (!$firstArray || !$secondArray) {
        return [];
    }
    $lengthOfFirstArray = count($firstArray);
    $lengthOfSecondArray = count($secondArray);
    $smallest = floatval(INF);
    $current = floatval(INF);
    $smallestPair = [];
    if ($lengthOfFirstArray < 0 || $lengthOfSecondArray < 0) {
        return [];
    }
    if ($lengthOfFirstArray < $lengthOfSecondArray) {
        $temp = $lengthOfSecondArray;
        $lengthOfFirstArray =  $lengthOfSecondArray;
        $lengthOfSecondArray = $temp;
    }
    for ($i = 0; $i < $lengthOfFirstArray; $i++) {
        for ($j = 0; $j < $lengthOfSecondArray; $j++) {
            $current = abs($firstArray[$i] - $secondArray[$j]);
            if ($current == 0) {
                $smallestPair = [$firstArray[$i], $secondArray[$j]];
                return $smallestPair;
                // break;
            }
            if ($smallest > $current) {
                $smallest = $current;
                $smallestPair =  [$firstArray[$i], $secondArray[$j]];
            }
        }
    }
    return $smallestPair;
}
$firstArray = [-1, 5, 10, 20, 28, 3];
$secondArray = [26, 134, 135, 15, 17, 9];
print_r(smallestDifference($firstArray, $secondArray));
