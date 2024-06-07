<?php

class Login
{
    private $login;
    private $pswd;
    private $id_user; 
    private $cpf_cnpj;
    private $nome;
    private $email;

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }

}
