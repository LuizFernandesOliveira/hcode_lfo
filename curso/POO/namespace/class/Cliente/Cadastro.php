<?php
/**
 * Created by PhpStorm.
 * User: Luiz Fernandes
 * Date: 25/03/2019
 * Time: 14:05
 */
namespace Cliente;

class Cadastro extends \Cadastro
{

    public function registrarVenda(){
        echo "foi registrado".$this->getNome();
    }

}