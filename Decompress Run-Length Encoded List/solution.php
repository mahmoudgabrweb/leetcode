<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function decompressRLElist($nums)
    {
        // The problem is to take the array into chunks of two pairs
        // First element in each pair is the frequency of the second element in the same pair
        $result = [];
        $i = 0;
        // will loop in the full array first and jump each two elements
        while ($i < count($nums)) {
            // let get the value which will be repeated and add some character to it, so we can cut it later
            $currentNumber = $nums[$i + 1] . "-";
            // First we will repeat that element by the count of the frequency
            // Then trim the last character which we added before
            // Then explode to an array
            $currentResult = explode("-", trim(str_repeat($currentNumber, $nums[$i]), "-"));
            // merge the current array with the main array
            $result = array_merge($result, $currentResult);
            // Jump to the next pair
            $i += 2;
        }
        return $result;
    }
}