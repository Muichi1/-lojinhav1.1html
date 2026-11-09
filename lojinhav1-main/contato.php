<?php require_once('header.php')?>

<!-- Início minha conta -->
<div class="minha-conta">
    <div class="container">
        <div class="linha">

            <div class="col-2">
                <img src="assets/img/banner-3.png" alt="" width="100%">
            </div>

            <div class="col-2">
                <div class="formulario">
                    <div class="btn-form">
                        <span>Contato</span>
                    </div>

                    <form action="" method="post" id="CadastroSite2" style="margin-top:-55px">
                        <input type="text" name="nome" placeholder="Nome Completo">
                        <input type="tel" name="telefone" id="telefone" placeholder="(__) _____-____" maxlength="15">
                        <input type="email" name="email" placeholder="Email de acesso">
                        <textarea name="mensagem" cols="30" rows="10" placeholder="Deixe sua mensagem"></textarea>
                        <button type="submit" name="sendCadastro" class="btn">Enviar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Início config telefone -->

<script>
const campoTelefone = document.getElementById('telefone');

campoTelefone.addEventListener('input', function () {
    let numeros = this.value.replace(/\D/g, '').substring(0, 11);

    let formatado = '';

    if (numeros.length > 0) {
        formatado = '(' + numeros.substring(0, 2);

        if (numeros.length >= 3) {
            formatado += ') ' + numeros.substring(2, 7);
        }

        if (numeros.length > 7) {
            formatado += '-' + numeros.substring(7, 11);
        }
    }

    this.value = formatado;
});
</script>

<!-- Fim config telefone -->

<!-- Fim minha conta -->

<?php require_once('footer.php')?>