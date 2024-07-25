<?php

echo "hi there";

class Absurd
{
    private $human;

    public function __construct()
    {
        $this->human = 'latino';
    }

    public function getHuman()
    {
        return $this->human;
    }
}