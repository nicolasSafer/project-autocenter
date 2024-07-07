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

class Compra
{
    private $id_ordem_compra ;
    private $nivel;
    private $solicitante;
    private $data_abertura_oc ;
    private $data_final_oc ;
    private $valor_total;
    private $obs;
    private $qtd_pedidos;
    private $status_oc;

    public function __get($atributo2)
    {
        return $this->$atributo2;
    }
    public function __set($atributo2, $valor)
    {
        $this->$atributo2 = $valor;
        return $this;
    }

}


class Estoque{

    private $id_estoque;
    private $fk_tipo_produto_estoque;
    private $fk_fornecedor;
    private $nome_produto;
    private $quantidade_estoque;
    private $data_modificada;
    private $marca;
    private $categoria;


    public function __get($atributo3)
    {
        return $this->$atributo3;
    }
    public function __set($atributo3, $valor)
    {
        $this->$atributo3 = $valor;
        return $this;
    }

}

