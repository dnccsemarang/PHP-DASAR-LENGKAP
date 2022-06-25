<?php

class Programmer {
    public string $name;
    public function __construct(string $name)
    {
        $this->name =$name;
    }
}


class BackendProgrammer extends Programmer {

}

class FrondednProgrammer extends Programmer {

}


class Company {
    public Programmer $programmer;
}


function sayHelloProgrammer(Programmer $programmer) {
    echo "Hello programmer $programmer->name".PHP_EOL ;
    if($programmer instanceof BackendProgrammer){
        echo "Hello backend Programmer $programmer->name".PHP_EOL;
    }else if ($programmer instanceof FrondednProgrammer) {
        echo "Hello Frondend Programmer $programmer->name".PHP_EOL;
    }
    else {
        echo "Hello Programmer $programmer->name".PHP_EOL;
    }
}