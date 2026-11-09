<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Nakita :D</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    <style>
        .texto-fraktur {
            font-family: 'UnifrakturCook', cursive;
            font-size: 44px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <!-- Início -->

     <div class="banner">
        <!-- Inicío Container -->

        <div class="container">

            <!-- Inicío Navegação -->

            <div class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo.jpg" alt="Nakita" width="125px">
                    </a>
                </div>
                <!-- Início Menu Navegação -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="sobre.php" title="">Sobre</a></li>
                        <li><a href="contato.php" title="">Contato</a></li>
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>

                <!-- Fim Menu Navegação -->
                <a href="carrinho.php" title="">
                <img src="assets/img/carrinho.png" alt="Carrinho" width="30px" height="30px">
                </a>
                

                <img src="assets/img/menu.png" alt="Abrir menu" class="menu" onclick="menuce()">

            </div>
            <div class="linha-neon2"></div>