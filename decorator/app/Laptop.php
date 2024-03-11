<?php

namespace App;

class Laptop implements Computer {
    
    public function getPrice(): int 
    {
        return 400;
    }

    public function getDescription(): string 
    {
        return "A laptop computer";
    }

    public function AddGraphicCard(): string
    {
        return "nvidia geforce 1080tx";
    }
    public function AddOledScreen(): string
    {
        return "oled screen 16/9";
    }
}   