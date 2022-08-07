<?php

require_once ('./methods/MergeSortMethod.php');

class MergeSortTest extends \PHPUnit\Framework\TestCase
{
    public function testMergeSort()
    {
        $testString  = "befdac";
        $sortMethod = (new MergeSortMethod($testString));

        $this->assertEquals("abcdef", $sortMethod->sortData());
    }
}