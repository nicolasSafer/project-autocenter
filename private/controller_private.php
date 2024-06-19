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
    
 
 }else if($acao == 'new'){
  
    $compra = new Compra();
    $conexao = new Conexao();

    $compra->__set('id_contrato', $_POST['select']);
    $compra->__set('nivel', $_POST['nivel']);
    $compra->__set('solicitante', $_POST['solicitante']);
    $compra->__set('data_abertura', $_POST['data-inicial']);
    $compra->__set('data-final', $_POST['data-final']);
    $compra->__set('valor_total', $_POST['valor']);
    $compra->__set('obs', $_POST['observacao']);
    $compra->__set('qtd_pedidos', $_POST['quantidade']);
    $compra->__set('status_oc', 'OC');

    $service = new Cadastrar_compra($conexao, $compra);
   
    if($service =  $service->insert()){
        header('Location: form.html?acao=sucess');
    }else{
        header('Location: form.html?acao=negative');
    }

 }else if($acao == 'recuperar'){
    $compra = new Compra();
    $conexao = new Conexao();

    $service = new Cadastrar_compra($conexao, $compra);
    $compras = $service->read();
   
 }else if($acao == 'editar'){
    $compra = new Compra();
    $conexao = new Conexao();

    $service = new Cadastrar_compra($conexao, $compra);
    $compras = $service->update();

 }





?>