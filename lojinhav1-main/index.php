<?php require_once('header-index.php')?>

            <div class="linha-neon2"></div>
            <!-- Fim Navegação -->

            <!-- Início Banner -->
                <div class="linha">
                    <div class="col-2">
                        <h1 class="texto-fraktur">Bem-vindo à Loja Nakita!</h1>
                        <p>Apenas os melhores produtos para você!</p>
                        <br><a href="produtos.php" class="btn">Mais Informações &#8594;</a>
                </div>

                    <div class="col-2">
                        <img src="assets/img/banner-1.png" alt="" width="50%" style="margin-left: 150px;">
                    </div>

                </div>
            <!-- Fim Banner -->


        </div>
        <!-- Fim Container -->

        <!-- Início Categorias -->
        <div class="categorias">
            <div class="corpo-categorias">
                <div class="linha">

                    <div class="col-3">
                        <img src="assets/img/categoria-1.png" alt="">
                    </div>
                    <div class="col-3">
                        <img src="assets/img/categoria-2.png" alt="">
                    </div>
                    <div class="col-3">
                        <img src="assets/img/categoria-3.png" alt="">
                    </div>

                </div>
            </div>
        </div>
        <!-- Fim Categorias -->

        <!-- Inicío Produtos -->
         <div class="corpo-categorias">
            <h2 class="titulo texto-fraktur">Produtos em Destaque</h2>
            <div class="linha">
                <div class="col-4">
                    <a href="ver-produto.php" title="">
                    <img src="assets/img/produto-1.jpg" alt="Produto 1">
                    </a>
                    <h4>Produto 1</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$ 100,00</p>
                </div>
            </div>

         </div>
        <!-- Fim Produtos -->

        <!-- Inicío Novidades -->
         <h2 class="titulo texto-fraktur">Novidades</h2>

         <div class="corpo-categorias">
            <div class="linha">
                <div class="col-4">
                    <img src="assets/img/produto-1.jpg" alt="Produto 1">
                    <h4>Produto 1</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$ 100,00</p>
                </div>
            </div>

         </div>

        <!-- Fim Novidades -->

        <!-- Inicío Depoimentos -->
         <div class="depoimentos">
            <div class="corpo-categorias">
                <div class="linha">
                    <!-- Início Item Depoimento -->
                     <div class="col-3">
                        <ion-icon name="skull" class="depoimento-icone"></ion-icon>
                        <p>Ótimo atendimento com o bakuki, ba-ba-batuki!</p>
                        <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        </div>
                        <img src="assets/img/cliente-1.jpg" alt="Cliente 1">
                        <h3>Vovó Tereza</h3>

                     </div>
                    <!-- Fim Item Depoimento -->
                </div>
            </div>
         </div>
        <!-- Fim Depoimentos -->

        </div>
        <?php require_once('footer.php')?>