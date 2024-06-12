<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'negative') {
echo 'Negado';
 }
$acao = 'logar';
 require_once 'controller.php';
$conexao = new Conexao();



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style-login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<script>

  function logar(){
    // location.href = 'login.php?acao=sucess';
    
}

</script>
  


</head>

<body>

    <div class="logo">
        <!-- <img src="img/lgo 2.jpeg" alt=""> -->
        <a href="#">BESTSTART</a>
    </div>
    <div class="container">
        <h1>Entrar em sua conta 🙌</h1>
        <div class="social-login">
            <button class="google">
                <i class='bx bxl-google'></i>
                Entrar google
            </button>
            <button class="apple">
                <i class='bx bxl-apple'></i>
                Entrar Apple
            </button>

        </div>
        <div class="divider">
            <div class="line"></div>
            <!-- 10:22 -->
            <p>Ou</p>
            <div class="line"></div>
        </div>
        <form method="post" action="controller.php?acao=sucess">
            <label for="email">Email</label>
            <div class="custome-input">
                <input type="email" name="email" placeholder="Seu email">
                <i class='bx bx-at'></i>
            </div>
            <label for="password">Senha</label>
            <div class="custome-input">
                <input type="password" name="password" placeholder="Sua senha" autocomplete="off">
                <i class='bx bx-lock'></i>
            </div>
            <button class="login" onclick="logar()">Entrar</button>
            <div class="links">
                <a href="">Resetar senha</a>
                <a href="">Não possui conta?</a>
            </div>
        </form>
    </div>

</body>

</html>
