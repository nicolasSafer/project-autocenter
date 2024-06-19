<?php
$acao = 'recuperar';
require 'controller.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BESTSTART</title>
  <link rel="stylesheet" href="css/style-form-os.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <script>




    function novo(){
      location.href = 'form-pedido-new.php?acao=novo';
  }

  function editar(id_ordem_compra){
    location.href = 'form-pedido-new.php?acao=recuperar&id_ordem_compra='+id_ordem_compra;
  }

  </script>


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
          <li class="" >
            <a href="index.php" >
              <i class="icom ph-bold ph-house-simple" ></i>
              <span class="text">Inicio</span>
            </a>
          </li>
          <li class="">
            <a href="planejamento.html">
              <i class="ph ph-calendar-dots"></i>
              <span class="text">Planejamento</span>
            </a>
          </li>
          <li class="">
            <a href="estoque.php">
              <i class="ph ph-barn" ></i>
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
                  <i class="ph ph-note-pencil" ></i>
                  <span class="text">Ordem de compra</span>
                </a>
              </li>
              <li>
                <a href="expedicao.php">
                  <i class="ph ph-package" ></i>
                  <span class="text">Expedição</span>
                </a>
              </li>
              <li>
                <a href="fornecedor.php">
                  <i class="ph ph-users-three" ></i>
                  <span class="text">Fornecedores</span>
                </a>
              </li>
            </ul>
          </li>
          <li class=""> 
            <a href="">
              <i class="ph ph-car-profile" ></i>
              <span class="text">Veiculos</span>
              <i class="arrow ph ph-caret-down"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="oc.php">
                  <i class="ph ph-wrench" ></i>
                  <span class="text">Ordem de serviço</span>
                </a>
              </li>
              <li>
                <a href="veiculo.php">
                  <i class="ph ph-car-profile" onclick="veiculo()"></i>
                  <span class="text">Veículos Cadastrados</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="financeiro.php">
              <i class="ph ph-coins" ></i>
              <span class="text">Financeiro</span>
            </a>
          </li>
          <li class="">
            <a href="login.php">
              <i class="ph ph-sign-out" ></i>
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
          <h3>Ordem de serviços</h3>
        </div>
      </div>
      <div class="analytics">
        <div class="item" >
          <div class="progressor">
            <div class="info">
              <h5>Pedidos Total</h5>
              <p>$ 2.580,24</p>
              <span><b>+15%</b></span>
            </div>
          </div>
          <i class="ph ph-note"></i>
        </div>

        <div class="item" >
          <div class="progressor">
            <div class="info">
              <h5>Pedidos Prefeitura</h5>
              <p>$ 1.490,12</p>
              <span><b>+15%</b></span>
            </div>
          </div>
          <i class="ph ph-note"></i>
        </div>

        <div class="item" >
          <div class="progressor">
            <div class="info">
              <h5>Pedidos Cliente</h5>
              <p>$ 1.090,12</p>
              <span><b>+15%</b></span>
            </div>
          </div>
          <i class="ph ph-note"></i>
        </div>
        
        <div class="btn-new">
        </div>      
      </div>
      <!-- Fim div analitics -->

      <!-- COMEÇO DIV FORM -->
      <div class="botao">
        <button type="button" class="btn btn-dark btn-lg"><i class="ph ph-arrow-clockwise"></i></button>
        <button type="button" class="btn btn-success btn-lg" onclick="novo()">+ Novo pedido</button>
        
      </div>
<div class="table-responsive">
  <table class="table  table-striped table-hover ">
        <caption>Lista de pedidos</caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Solicitante</th>
            <th scope="col">Data Inicial</th>
            <th scope="col">Data Final</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
          <?php foreach ($compras as $indice => $compras) {?>
            <th scope="row"><?=$compras->id_ordem_compra ?></th>
            
            <td><?= $compras->solicitante ?></td>
            <td><?= $compras->data_abertura_oc ?></td>
            <td><?= $compras->data_final_oc ?></td>

            <td style="width: 120px;">
              <button type="button" class="btn btn-primary " onclick="editar(<?=$compras->id_ordem_compra?>)"> <i class='bx bx-edit'></i></button>
              <button type="button" class="btn btn-danger ">  <i class="ph ph-trash"></i></button>
            </td>
          </tr>
          <?php  } ?>
          
        </tbody>
      </table>
</div>
      

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
