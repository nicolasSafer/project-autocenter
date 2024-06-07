<?php
require "private/model.php";
require "private/service.php";
require "private/conexao.php";

//isset($_GET['acao']) && $_GET['acao'] == 'sucess'
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'sucess') {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $login = new Login();
    $conexao = new Conexao();

    $login->__set('login', $_POST['email']);
    $login->__set('pswd', $_POST['password']);

    // echo '<pre>';
    // print_r($login);
    // echo '</pre>';

    $service = new Acessar($conexao, $login);
    if($service = $service->logar()){
        header('Location: index.html?acao=sucess');
    }else{
        header('Location: login.html?acao=negative');
    }
    
 
 }





?>