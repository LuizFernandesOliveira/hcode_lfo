<?php


class Pessoa {

    public $nome;//atributo

    public function falar(){//método

        return "O meu nome é ".$this->nome;

    }

}

$luiz = new Pessoa();
$luiz->nome = "Luiz";
$luiz->falar();