<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second =" second";
    private string $third = "thirt";
    protected string $forth = "forth";

    public function getIterator()
    {
        $array = [
            "first" =>$this->first,
            "second" =>$this->second,
            "thirt" =>$this->third,
            "forth" =>$this->forth
        ];
        $iterator = new ArrayIterator($array);
        return $iterator ;
    }
}

$data = new Data();
foreach ($data as $property => $value ){
    echo " $property : $value".PHP_EOL;
}