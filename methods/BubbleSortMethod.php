<?php

require_once('./interfaces/SortingInterface.php');
require_once('./services/MainService.php');

class BubbleSortMethod extends MainService implements SortingInterface
{
    private string $value;

    public function __construct($value)
    {
        $this->value = $value;
    }


    /**
     * @return string
     */
    public function sortData(): string
    {
        // TODO: Implement sortData() method.
        $sortedArray = $this->stringToArray($this->value);

        $count = count($sortedArray) - 1;
        for($a = 0; $a < $count; $a++) {

            for($i = 0; $i < $count; $i++ ) {

                $temp = $sortedArray[$i+1];
                if ($temp < $sortedArray[$i]) {
                    $sortedArray[$i+1] = $sortedArray[$i];
                    $sortedArray[$i] = $temp;
                }
            }
        }

        return $this->arrangeValues($sortedArray);
    }

}