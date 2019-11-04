<?php

require_once 'Unit.php';

class Elf extends Unit
{
    protected $speed = 5;

    public function attack()
    {
        return 'A l\'attaque!';
    }
    public function getPosition()
    {
        return 'je suis maintenant situé au ' . $this->position[0] . ';' . $this->position[1];
    }

}
