<?php
require "regras/model.php";
require "regras/service.php";
require "regras/conexao.php";

if (isset($_GET['acao']) && $_GET['acao'] == 'sucess') {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $login = new Login();
    $conexao = new Conexao();

    $login->__set('login', $_POST['email']);
    $login->__set('pswd', $_POST['password']);

    echo '<pre>';
    print_r($login);
    echo '</pre>';

    $service = new Acessar($conexao, $login);
    if($service = $service->logar()){
        header('Location: index.php?acao=sucess');
    }else{
        header('Location: login.php?acao=negative');
    }
    
    // echo '<pre>';
    // print_r($service);
    // echo '</pre>';
    }





?>