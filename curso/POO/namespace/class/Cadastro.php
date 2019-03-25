<?php
/**
 * Created by PhpStorm.
 * User: Luiz Fernandes
 * Date: 25/03/2019
 * Time: 13:59
 */

class Cadastro
{
    private $nome;
    private $email;
    private $senha;


    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }


}