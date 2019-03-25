<?php

class Pessoa {

    public $nome = "Luiz Fernandes";
    protected $idade = 21;
    private $senha = "123";

    public function verDados()
    {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

class Programador extends Pessoa{



}

$objeto = new Programador();

echo $objeto->nome;
$objeto->verDados();

?>