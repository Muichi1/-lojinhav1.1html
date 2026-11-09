<?php require_once('header.php')?>

<!-- Início Minha Conta -->
        <div class="minha-conta">
            <div class="container">
                <div class="linha">

                    <div class="col-2">
                        <img src="assets/img/banner-1.png" alt="" width="100%">
                    </div>

                    <div class="col-2">
                        <div class="formulario">
                            <div class="btn-form">
                                <span onclick="mostrarEntrar()">Entrar</span>
                                <span onclick="mostrarCadastro()">Cadastro</span>
                                <hr id="Indicador">
                            </div>

                            <form action="" method="post" id="EntrarPainel">
                                <input type="email" name="email" id="" placeholder="E-mail de acesso">
                                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                                <button type="submit" name="senEntrar" class="btn">Entrar</button>
                                <a href="esqueci-senha.php" title="">Esqueci minha senha</a>
                            </form>

                            <form action="" method="post" id="CadastroSite">
                                <input type="text" name="nome" id="" placeholder="Nome completo">
                                <input type="email" name="email" id="" placeholder="E-mail de acesso">
                                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                                <button type="submit" name="sendCad" class="btn">Cadastre-se</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Fim Minha Conta -->

<?php require_once('footer.php')?>