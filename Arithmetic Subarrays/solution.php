<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer[] $l
     * @param Integer[] $r
     * @return Boolean[]
     */
    function checkArithmeticSubarrays($nums, $l, $r)
    {
        $result = [];
        // Here we will loop in one of the compared arrays
        for ($i = 0; $i < count($l); $i++) {
            // by default we will set the key of the current loop as true
            $result[$i] = true;
            // to calculate the length
            if ($r[$i] == 0) {  // if we are starting from index zero then the length of the sliced array is the end
                $length = $r[$i];
            } else {    // if we are staring from any other index then the length will be calculated by
                // end - start then add value of 1 to count the the index + 1
                $length = ($r[$i] - $l[$i]) + 1;
            }
            // cut the array
            $slicedArray = array_slice($nums, $l[$i], $length);
            // sort it
            sort($slicedArray);
            // get the diff of first two elements to compare with other values
            $diff = abs($slicedArray[1] - $slicedArray[0]);
            // loop in the remaining values
            for ($j = 2; $j < count($slicedArray); $j++) {
                // get the diff between current and the previous one, if it's different then the flag will be false and stop this loop
                $currentDiff = abs($slicedArray[$j] - $slicedArray[$j - 1]);
                if ($currentDiff != $diff) {
                    $result[$i] = false;
                    break;
                }
            }
        }
        return $result;
    }
}