<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade)
    {

    }

    public function frenar($velocidade)
    {

    }

    public function trocarMarcha($marcha)
    {

    }

}

class DelRey extends Automovel{

    public function empurrar(){

    }

}

