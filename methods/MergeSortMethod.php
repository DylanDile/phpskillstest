<?php

require_once('./interfaces/SortingInterface.php');
require_once('./services/MainService.php');

class MergeSortMethod extends MainService implements SortingInterface
{

    private string $typedData;

    /**
     * @param $typedData
     */
    public function __construct($typedData)
    {
        $this->typedData  = $typedData;
    }

    /**
     * @return string
     */
    public function sortData(): string
    {
        // TODO: Implement sortData() method.

        // Convert a written into an array of chars
        /** @var array $arr */
        $arr = $this->stringToArray($this->typedData);

        // Split arrays using divide and conquer algorithm
        $arr = $this->splitArray($arr);

        // return the sorted array as a string without commas
        return $this->arrangeValues($arr);

    }

    /**
     * @param $stringArray
     * @return array
     */
    public function splitArray($stringArray): array
    {
        if (count($stringArray) == 1) return $stringArray;

        $mid = count($stringArray) / 2;
        $left = array_slice($stringArray, 0, $mid);
        $right = array_slice($stringArray, $mid);

        $left = $this->splitArray($left);
        $right = $this->splitArray($right);

        return $this->merge($left, $right);
    }

    /**
     * @param $leftSplit
     * @param $rightSplit
     * @return array
     */
    public function merge($leftSplit, $rightSplit): array
    {
        $result = array();
        $leftIndex = 0;
        $rightIndex = 0;

        while ($leftIndex < count($leftSplit) && $rightIndex < count($rightSplit)) {
            if ($leftSplit[$leftIndex] > $rightSplit[$rightIndex]) {

                $result[] = $rightSplit[$rightIndex];
                $rightIndex++;
            } else {
                $result[] = $leftSplit[$leftIndex];
                $leftIndex++;
            }
        }
        while ($leftIndex < count($leftSplit)) {
            $result[] = $leftSplit[$leftIndex];
            $leftIndex++;
        }
        while ($rightIndex < count($rightSplit)) {
            $result[] = $rightSplit[$rightIndex];
            $rightIndex++;
        }
        return $result;
    }

}




