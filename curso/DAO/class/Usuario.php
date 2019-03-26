<?php
/**
 * Created by PhpStorm.
 * User: Luiz Fernandes
 * Date: 26/03/2019
 * Time: 11:52
 */

class Usuario
{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;
    }

    public function setDessenha($dessenha)
    {
        $this->dessenha = $dessenha;
    }

    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("select * from tb_usuarios where idusuario = :ID", array(
            ":ID"=>$id
        ));

        if(count($results)>0){

            $this->setData($results[0]);

        }
    }

    public static function getList(){
        $sql = new Sql();

        return $sql->select("select * from tb_usuarios order by deslogin");
    }

    public static function search($login){

        $sql = new Sql();

        return $sql->select("select * from tb_usuarios where deslogin like :SEARCH order by deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ));

    }

    public function login($login, $pass){
        $sql = new Sql();
        $results = $sql->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASS", array(
            ":LOGIN"=>$login,
            ":PASS"=>$pass
        ));

        if(count($results)>0){

            $this->setData($results[0]);

        }else{
            throw new Exception("Login e ou senha inválidos");
        }
    }

    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASS)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASS'=>$this->getDessenha()
        ));

        if(count($results)>0){
            $this->setData($results[0]);
        }
    }

    public function update($login, $pass){

        $this->setDeslogin($login);
        $this->setDessenha($pass);

        $sql = new Sql();
        $sql->query("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASS where idusuario = :ID;", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASS"=>$this->getDessenha(),
            ":ID"=>$this->getIdusuario()
        ));

    }

    public function delete(){

        $sql = new Sql();
        $sql->query("delete from tb_usuarios where idusuario = :ID", array(
            ":ID"=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());

    }

    public function __construct($login = "", $pass = "")
    {
        $this->setDeslogin($login);
        $this->setDessenha($pass);
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDtcadastro(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}