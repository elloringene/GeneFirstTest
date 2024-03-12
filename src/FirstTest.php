<?php

namespace Elloringene\GeneFirstTest;

class FirstTest {
    protected string $value;

    public function __construct(string $value)
    {   
        $this->value = $value;
    }

    public function sayHello(){
        return 'HELLO '. $this->value;
    }
}