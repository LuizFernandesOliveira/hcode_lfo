<?php

class Animal{
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{

    public function falar()
    {
       return "Late";
    }

}

class Passaro extends Animal{
    public function falar()
    {
        return "Canta";
    }

    public function mover()
    {
        return "voa e ".parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar();