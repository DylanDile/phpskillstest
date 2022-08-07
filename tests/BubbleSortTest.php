<?php

require_once ('./methods/BubbleSortMethod.php');

class BubbleSortTest extends \PHPUnit\Framework\TestCase
{
    public function testBubbleSort()
    {
        $testString  = "befdac";
        $sortMethod = (new BubbleSortMethod($testString));

        $this->assertEquals("abcdef", $sortMethod->sortData());
    }

}