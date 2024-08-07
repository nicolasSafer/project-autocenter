<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BESTSTART</title>
  <link rel="stylesheet" href="css/style-home.css">
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
          <li class="" >
            <a href="home.php" >
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
            <a href="index.php">
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
      <!-- <main> -->
        <header>
          <h5>Olá <b>Nicolas</b>, Bem vindo!</h5>
        </header>
        <div class="separator">
          <div class="info">
            <!-- <h3>RESUMO</h3> -->
          </div>
        </div>
        <div class="analytics">
          <div class="item" data-url="ordem-compra.php">
            <div class="progressor">
              <div class="info">
                <h5>Pedidos</h5>
                <p>35 Abertos</p>
              </div>
            </div>
            <i class="ph ph-note"></i>
          </div>
          <div class="item" data-url="estoque.html">
            <div class="progressor">
              <div class="info">
                <h5>Estoque</h5>
                <p>Peças em estoque</p>
              </div>
            </div>
            <i class="ph ph-barn"></i>
          </div>
          <div class="item" data-url="expedicao.php">
            <div class="progressor">
              <div class="info">
                <h5>Expedição</h5>
                <p>45 Envios</p>
              </div>
            </div>
            <i class="ph ph-package"></i>
          </div>
          <div class="item" data-url="financeiro.html">
            <div class="progressor">
              <div class="info">
                <h5>Financeiro</h5>
                <p>35 Notas</p>
              </div>
            </div>
            <i class="ph ph-coins"></i>
          </div>
          <div class="item" data-url="servico.html">
            <div class="progressor">
              <div class="info">
                <h5>Serviços</h5>
                <p>35 Em espera</p>
              </div>
            </div>
            <i class="ph ph-wrench"></i>
          </div>
          <div class="item" data-url="veiculos.html">
            <div class="progressor">
              <div class="info">
                <h5>Veículos</h5>
                <p>35 Veículos cadastrados</p>
              </div>
            </div>
            <i class="ph ph-car-profile"></i>
          </div>
          <div class="item" data-url="agendamennto.html">
            <div class="progressor">
              <div class="info">
                <h5>Agendamento</h5>
                <p>35 Agendamentos</p>
              </div>
            </div>
            <i class="ph ph-calendar-dots"></i>
          </div>
          <div class="item" data-url="suporte.html">
            <div class="progressor">
              <div class="info">
                <h5>Suporte</h5>
                <p>Suportes</p>
              </div>
            </div>
            <i class="ph ph-headset"></i>
          </div>
        </div>
        
        <aside class="right-section">
          <div class="separator">
            <h4>Pedidos do mês</h4>
          </div>
          <div class="grid-container">
            <!-- DIV DOS PEDIDOS DO MÊS -->
            <div class="weekly">
              <div class="title">
                <div class="line"></div>
                <i class="ph ph-calendar-minus"></i>
                <h5><b>Pedidos do mês</b></h5>
              </div>
              <div class=""><b>10/30</b></div>
            </div>
            <div class="weekly">
              <div class="title">
                <div class="line"></div>
                <i class="ph ph-calendar-minus"></i>
                <h5><b>Veículo do mês</b></h5>
              </div>
              <div class=""><b>10/30</b></div>
            </div>
            <div class="weekly">
              <div class="title">
                <div class="line"></div>
                <i class="ph ph-hourglass-low"></i>
                <h5><b>Expedições de hoje</b></h5>
              </div>
              <div class=""><b>10/30</b></div>
            </div>
            <div class="weekly">
              <div class="title">
                <div class="line"></div>
                <i class="ph ph-hourglass-low"></i>
                <h5><b>--------------</b></h5>
              </div>
              <div class=""><b>10/30</b></div>
            </div>
            <div class="weekly">
              <div class="title">
                <div class="line"></div>
                <i class="ph ph-clock-clockwise"></i>
                <h5><b>Pedidos com vencimento para hoje</b></h5>
              </div>
              <div class=""><b>10/30</b></div>
            </div>
            <div class="weekly">
              <div class="title">
                <div class="line"></div>
                <i class="ph ph-clock-clockwise"></i>
                <h5><b>Veículos para hoje</b></h5>
              </div>
              <div class=""><b>10/30</b></div>
            </div>
            <!-- FIM DOS PEDIDOS DO MÊS -->
          </div>
          <!-- DIV DE STATUS DOS PEDIDOS COMPLETOS -->
          <div class="stats">
            <div class="item">
              <div class="top">
                <p>Pedidos Incompletos:</p>
                <span><b>30</b></span>
              </div>
              <div class="bottom"></div>
            </div>
            <div class="item">
              <div class="top">
                <p>Veículos Incompletos</p>
                <span><b>10</b></span>
              </div>
              <div class="bottom"></div>
            </div>
            <div class="item">
              <div class="top">
                <p>Pedidos Completos</p>
                <span><b>20</b></span>
              </div>
              <div class="bottom">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 25%">25%</div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="top">
                <p>Veículos Completos</p>
                <span><b>40</b></span>
              </div>
              <div class="bottom">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 45%">40%</div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIM DIV DE STATUS DOS PEDIDOS COMPLETOS -->
        </aside>
      <!-- </main> -->
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
