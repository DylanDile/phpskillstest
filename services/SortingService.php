<?php

include ('./methods/BubbleSortMethod.php');
include ('./methods/MergeSortMethod.php');

class SortingService implements SortingInterface
{
    /**
     * @var Data $data
     */
    private Data $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function sortData(): ?string
    {

        $value = $this->data->getTypedValue();
        $method = $this->data->getSortMethod();

        return (new $method($value))->sortData();
        /*
        if($method == "BubbleSort"){
            return (new BubbleSortMethod($value) )->sortData();
        }

        if($method == "MergeSort"){
            return (new MergeSortMethod($value) )->sortData();
        }

        return  $value;
        */

    }
}