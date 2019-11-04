<?php

class Unit
{
    protected $pv;

    protected $position = [0, 0];

    protected $speed = 1;

    public function walk($direction){

        switch ($direction){
            case 'right':
                $this->position[0] += $this->speed;
                echo 'Je viens de prendre la direction ' . $direction;
                echo ' je suis maintenant situé au ' . $this->position[0] . ';' . $this->position[1] . '<br>';
                break;
            case 'left':
                $this->position[0] -= $this->speed;
                echo 'Je viens de prendre la direction ' . $direction;
                echo ' je suis maintenant situé au ' . $this->position[0] . ';' . $this->position[1] . '<br>';
                break;
            case 'top':
                $this->position[1] += $this->speed;
                echo 'Je viens de prendre la direction ' . $direction;
                echo ' je suis maintenant situé au ' . $this->position[0] . ';' . $this->position[1] . '<br>';
                break;
            case 'bottom':
                $this->position[1] -= $this->speed;
                echo 'Je viens de prendre la direction ' . $direction;
                echo ' je suis maintenant situé au ' . $this->position[0] . ';' . $this->position[1] . '<br>';
                break;

        }
    }
}