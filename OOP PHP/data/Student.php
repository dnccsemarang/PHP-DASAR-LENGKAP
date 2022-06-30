<?php

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample ;

    public function setSemple(string $sample) :void {
        $this->sample = $sample;
    }
}