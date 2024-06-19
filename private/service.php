<?php

class Acessar{
    
    private $conexao;
    private $log;

    public function __construct(Conexao $conexao, Login $login)
    {
        //variavel conexao da tarefa.service está recebendo a $conexao de tarefa_controller.php que está acessando o metodo conectar dentro de conexao.php retornando o link de conexao
        $this->conexao = $conexao->conectar();
        $this->log = $login;
    }

    public function logar()
    {
        $query = "
                SELECT 
                    login,
                    pswd,
                    id_user,
                    cpf_cnpj,
                    name,
                    email 
                FROM 
                    safe_users 
                WHERE
                    email = :email and pswd =:pswd";
       
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $this->log->__get('login'));
        $stmt->bindValue(':pswd', $this->log->__get('pswd'));
       
        $stmt->execute();
        // echo '<pre>';
        // print_r($stmt);
        // echo '</pre>';
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        // echo 'foi';

    }



}

class Cadastrar_compra{

    private $conexao;
    private $com;

    public function __construct(Conexao $conexao, Compra $compra)
    {
        //variavel conexao da tarefa.service está recebendo a $conexao de tarefa_controller.php que está acessando o metodo conectar dentro de conexao.php retornando o link de conexao
        $this->conexao = $conexao->conectar();
        $this->com = $compra;
    }
    public function read(){
        
        $query = "SELECT id_ordem_compra, solicitante, data_abertura_oc, data_final_oc FROM ordem_compra";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert(){

        try {

            $query = "
        INSERT INTO ordem_compra(id_ordem_compra, fk_id_contrato, fk_nivel, solicitante, data_abertura_oc, data_final_oc, valor_total, obs, qtd_pedidos)
                VALUES(
                    3,
                    :id_contrato,
                    :nivel,
                    :solicitante,
                    :data_abertura,
                    :data_final,
                    :valor_total,
                    :obs,
                    :qtd_pedidos
        
                )";

                    $stmt = $this->conexao->prepare($query);
                    $stmt->bindValue(':id_contrato', $this->com->__get('id_ordem_compra'));
                    $stmt->bindValue(':nivel', $this->com->__get('nivel'));
                    $stmt->bindValue(':solicitante', $this->com->__get('solicitante'));
                    $stmt->bindValue(':data_abertura', $this->com->__get('data_abertura_oc'));
                    $stmt->bindValue(':data_final', $this->com->__get('data_final_oc'));
                    $stmt->bindValue(':valor_total', $this->com->__get('valor_total'));
                    $stmt->bindValue(':obs', $this->com->__get('obs'));
                    $stmt->bindValue(':qtd_pedidos', $this->com->__get('qtd_pedidos'));
                    return $stmt->execute();


            }catch (PDOException $e){ echo '<p>Error: '.$e->getMessage().'</p>'; }
 
    }

    public function update(){
        $query = "UPDATE ordem_compra SET fk_id_contrato = :id_contrato, fk_nivel = :nivel, solicitante = :solicitante, data_abertura_oc = :data_abertura, data_final_oc = :data_final, valor_total = :valor_total, obs = :obs, qtd_pedidos = :qtd_pedidos WHERE id_ordem_compra = :id_ordem_compra";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_ordem_compra', $this->com->__get('id_ordem_compra'));
        $stmt->bindValue(':id_contrato', $this->com->__get('id_contrato'));

        
    }

}
    



?>