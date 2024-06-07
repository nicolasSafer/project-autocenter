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


?>