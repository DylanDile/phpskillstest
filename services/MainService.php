<?php

class MainService
{
    /**
     * @param array $sortedArray
     * @return string
     */
    public function arrangeValues(array $sortedArray): string
    {
        return implode('', $sortedArray);
    }

    /**
     * @param string $value
     * @return array|false
     */
    public function stringToArray(string $value)
    {
        return str_split($value);
    }
}