<?php

 require_once 'controller.php';
$conexao = new Conexao();



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BESTSTART</title>
  <link rel="stylesheet" href="css/style-form-oc-new.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
  <!-- MENU --> 
  <div class="sidebar">
    <div class="head">
      <div class="user-img">
        <img src="img/img-index/brutos.jpg" alt="" >
      </div>
      <div class="user-details">
        <p class="title">web developer</p>
        <p class="name">Nicolas Fernandes</p>
      </div>
    </div>
    <div class="nav">
      <div class="menu">
        <p class="title">Menu</p>
        <ul>
          <li class="">
            <a href="index.html">
              <i class="icom ph-bold ph-house-simple"></i>
              <span class="text">Inicio</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="ph ph-calendar-dots"></i>
              <span class="text">Planejamento</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="ph ph-barn"></i>
              <span class="text">Estoque</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="ph ph-note"></i>
              <span class="text">Pedidos</span>
              <i class="arrow ph ph-caret-down"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="ordem-compra.php">
                  <i class="ph ph-note-pencil"></i>
                  <span class="text">Ordem de compra</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="ph ph-package"></i>
                  <span class="text">Espedição</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="ph ph-users-three"></i>
                  <span class="text">Fornecedores</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="">
              <i class="ph ph-car-profile"></i>
              <span class="text">Veiculos</span>
              <i class="arrow ph ph-caret-down"></i>
            </a>
            <ul class="sub-menu">
              <li>

                <a href="">
                  <i class="ph ph-wrench"></i>
                  <span class="text">Ordem de serviço</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="ph ph-car-profile"></i>
                  <span class="text">Veículos Cadastrados</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="">
              <i class="ph ph-coins"></i>
              <span class="text">Financeiro</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="ph ph-sign-out"></i>
              <span class="text">Sair</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- FIM MENU -->

  <!-- <div class="containeres"> -->
    <section>
     <div class="separator">
        <div class="info">
          <h3></h3>
        </div>
      </div>

<?php 
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'recuperar') { ?>

<form method="post" action="controller.php?acao=update">
<div class="container">
    <div class="row">
        <div class="input-group col-md-6">
            <div class="formulario col-md-3">
                
                <label for="">Contrato</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="select" aria-label="Default select example" >
                        <option selected>Lista de contratos</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
            </div>
            <div class="formulario col-md-3">
                <label for="">Solicitante</label>
                <div class="input-group mb-3">
                    <input type="text" name="solicitante" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"  >
                </div>
            </div>
        </div>
        <div class="formulario input-group col-md-6">
            <div class="formulario col-md-2">
                <label for="">Quantidade</label>
                <input type="text" name="quantidade" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"  >
            </div>
            <div class="formulario col-md-4">
                <label for="">Valor</label>
                <div class="input-group">
                  
                    <input type="text" name="valor" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"  >
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                </div>
            </div>
        </div>
        <div class="input-group col-md-6">
            <div class="formulario col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                <textarea class="form-control" name="observacao" id="exampleFormControlTextarea1" rows="3"  ></textarea>
              </div>
        </div>
        <div class="formulario input-group col-md-6">
            <div class="formulario col-md-2">
                <label for="">Data de preenchimento</label>
                <div class="input-group">
                    <input type="date"  name="data-inicial">
                </div>
            </div>
            <div class="formulario col-md-2">
                <label for="">Data de previsão</label>
                <div class="input-group">
                    <input type="date"  name="data-final">
                </div>
            </div>
            <div class="formulario">
                <label for="">Nivel de prioridade</label>
                <select class="form-select" name="nivel" aria-label="Default select example"  > 
                    <option selected>Lista de contratos</option>
                    <option value="1">Normal</option>
                    <option value="2">Médio</option>
                    <option value="3">Urgente</option>
                  </select>
            </div>
        </div>
        <div class="botao">
            <button type="submit" class="btn btn-success btn-lg">Editar</button>
        </div>
    </div>
  </div>
</form>

<?php }else{   ?> 
  <form method="post" action="controller.php?acao=new">
<div class="container">
    <div class="row">
        <div class="input-group col-md-6">
            <div class="formulario col-md-3">
                <label for="">Contrato</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="select" aria-label="Default select example" >
                        <option selected>Lista de contratos</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
            </div>
            <div class="formulario col-md-3">
                <label for="">Solicitante</label>
                <div class="input-group mb-3">
                    <input type="text" name="solicitante" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"  >
                </div>
            </div>
        </div>
        <div class="formulario input-group col-md-6">
            <div class="formulario col-md-2">
                <label for="">Quantidade</label>
                <input type="text" name="quantidade" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"  >
            </div>
            <div class="formulario col-md-4">
                <label for="">Valor</label>
                <div class="input-group">
                  
                    <input type="text" name="valor" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"  >
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                </div>
            </div>
        </div>
        <div class="input-group col-md-6">
            <div class="formulario col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                <textarea class="form-control" name="observacao" id="exampleFormControlTextarea1" rows="3"  ></textarea>
              </div>
        </div>
        <div class="formulario input-group col-md-6">
            <div class="formulario col-md-2">
                <label for="">Data de preenchimento</label>
                <div class="input-group">
                    <input type="date"  name="data-inicial">
                </div>
            </div>
            <div class="formulario col-md-2">
                <label for="">Data de previsão</label>
                <div class="input-group">
                    <input type="date"  name="data-final">
                </div>
            </div>
            <div class="formulario">
                <label for="">Nivel de prioridade</label>
                <select class="form-select" name="nivel" aria-label="Default select example"  > 
                    <option selected>Lista de contratos</option>
                    <option value="1">Normal</option>
                    <option value="2">Médio</option>
                    <option value="3">Urgente</option>
                  </select>
            </div>
        </div>
        <div class="botao">
            <button type="submit" class="btn btn-success btn-lg">Cadastrar pedido</button>
        </div>
    </div>
</div>
</form>

<?php }?>



      
    </section>



  <!-- </div> -->

  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

  <script>
    // Seleciona todas as divs com a classe .item
    const divsClickable = document.querySelectorAll('.item');

    // Adiciona um evento de clique a cada div clicável
    divsClickable.forEach(div => {
      div.addEventListener('click', function() {
        const url = this.getAttribute('data-url'); // Obtém a URL do atributo data-url

        // Verifica se a URL está definida e não é vazia
        if (url && url.trim() !== '') {
          window.location.href = url; // Redireciona para a URL obtida
        } else {
          console.error('URL não válida.');
        }
      });
    });
  </script>
</body>
</html>
