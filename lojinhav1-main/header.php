<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Nakita :D</title>
    
    <!-- Link do seu CSS principal -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    <!-- A tag <style> agora está correta, DENTRO do <head> -->
</head>

<body>
    <!-- Início -->

     <div class="novoMenu">
        <!-- Inicío Container -->
        <div class="container">

            <!-- Inicío Navegação -->
            <div class="navbar">

                <div class="logo">
                    <a href="index.php" title="">
                        <img src="assets/img/logo.jpg" alt="Nakita" width="125px">
                    </a>
                </div>

                <!-- Início Menu Navegação -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" class="link-produto">Início</a></li>
                        <li><a href="produtos.php" class="link-produto">Produtos</a></li>
                        <li><a href="sobre.php" class="link-produto">Sobre</a></li>
                        <li><a href="contato.php" class="link-produto">Contato</a></li>
                        <li><a href="minha-conta.php" class="link-produto">Minha Conta</a></li>
                    </ul>
                </nav>
                <!-- Fim Menu Navegação --> 
                <a href="carrinho.php" title="">
                <img src="assets/img/carrinho.png" alt="Carrinho" width="30px" height="30px">
                </a>
                <img src="assets/img/menu.png" alt="Abrir menu" class="menu" onclick="menuce()">

            </div>
            <!-- Fim Navegação -->

        </div>
        <!-- Fim Container -->
    </div>
        <!-- Fim Container -->