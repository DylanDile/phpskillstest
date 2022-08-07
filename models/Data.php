<?php

class Data
{
    private string $typedValue;
    private string $sortMethod;

    public function __construct($typedValue, $sortMethod)
    {
        $this->typedValue = $typedValue;
        $this->sortMethod = $sortMethod;
    }

    public function getTypedValue(): string
    {
        return $this->typedValue;
    }

    public function getSortMethod(): string
    {
        return $this->sortMethod;
    }

}