<?php
function moveElementToEnd(array $array, int $toMove): array{
    //Declare our pointers
    $firstPointer = 0;
    $secondPointer = count($array) -1;
    while($firstPointer < $secondPointer){
      while($firstPointer< $secondPointer && $array[$secondPointer] == $toMove){
        //move second pointer to left
          $secondPointer-=1;
      }
      //perform the swap
      if($array[$firstPointer] == $toMove){
         $numberToSwap = $array[$firstPointer];
         $array[$firstPointer] = $array[$secondPointer];
         $array[$secondPointer] = $numberToSwap;
       }
      //move first pointer to the right
        $firstPointer++;
    }
    return $array;
  }

print_r(moveElementToEnd([2,1,3,2,4,2,3,2,1,2,4,2], 2));