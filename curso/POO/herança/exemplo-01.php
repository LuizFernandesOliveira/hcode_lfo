<?php

class Documento{

    private $numero;


    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


}

class CPF extends Documento{

    public function validar(){
        $numeroCPF = $this->getNumero();


        return true;
    }

}