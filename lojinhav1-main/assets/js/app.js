document.addEventListener("DOMContentLoaded", function () {
    const produtoForm = document.getElementById("produto-form");

    if (produtoForm) {
        produtoForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const tamanho = document.getElementById("tamanhoProduto").value;
            const quantidade = Number(document.getElementById("quantidadeProduto").value);
            const produtos = JSON.parse(localStorage.getItem("nakita-carrinho") || "[]");
            const chave = "anel-pentagrama-" + tamanho;
            const existente = produtos.find(function (produto) {
                return produto.chave === chave;
            });

            if (existente) {
                existente.quantidade += quantidade;
            } else {
                produtos.push({
                    chave: chave,
                    nome: "Anel Gótico Pentagrama Baphomet",
                    tamanho: tamanho,
                    quantidade: quantidade,
                    preco: 59.9,
                    imagem: "assets/img/carrinho/carrinho1.webp"
                });
            }

            localStorage.setItem("nakita-carrinho", JSON.stringify(produtos));
            window.location.href = "carrinho.html";
        });
    }

    const itensCarrinho = document.getElementById("itens-carrinho");

    if (itensCarrinho) {
        const formatarMoeda = function (valor) {
            return valor.toLocaleString("pt-BR", {
                style: "currency",
                currency: "BRL"
            });
        };

        const desenharCarrinho = function () {
            const produtos = JSON.parse(localStorage.getItem("nakita-carrinho") || "[]");
            itensCarrinho.replaceChildren();

            if (produtos.length === 0) {
                const linha = document.createElement("tr");
                const celula = document.createElement("td");
                celula.colSpan = 3;
                celula.textContent = "Seu carrinho está vazio. ";
                const link = document.createElement("a");
                link.href = "produtos.html";
                link.textContent = "Explorar produtos";
                celula.append(link);
                linha.append(celula);
                itensCarrinho.append(linha);
            }

            produtos.forEach(function (produto, indice) {
                const linha = document.createElement("tr");
                const detalhe = document.createElement("td");
                const info = document.createElement("div");
                const imagem = document.createElement("img");
                imagem.src = produto.imagem;
                imagem.alt = produto.nome;
                const descricao = document.createElement("div");
                const nome = document.createElement("p");
                nome.textContent = produto.nome;
                const tamanho = document.createElement("small");
                tamanho.textContent = "Tamanho: " + produto.tamanho +
                    " | Valor: " + formatarMoeda(produto.preco);
                const remover = document.createElement("button");
                remover.type = "button";
                remover.className = "link-remover";
                remover.textContent = "Remover";
                remover.addEventListener("click", function () {
                    produtos.splice(indice, 1);
                    localStorage.setItem("nakita-carrinho", JSON.stringify(produtos));
                    desenharCarrinho();
                });
                descricao.append(nome, tamanho, document.createElement("br"), remover);
                info.className = "info-carrinho";
                info.append(imagem, descricao);
                detalhe.append(info);

                const quantidadeCelula = document.createElement("td");
                const quantidade = document.createElement("input");
                quantidade.type = "number";
                quantidade.min = "1";
                quantidade.step = "1";
                quantidade.value = String(produto.quantidade);
                quantidade.setAttribute("aria-label", "Quantidade de " + produto.nome);
                quantidade.addEventListener("change", function () {
                    produto.quantidade = Math.max(1, Number(quantidade.value) || 1);
                    localStorage.setItem("nakita-carrinho", JSON.stringify(produtos));
                    desenharCarrinho();
                });
                quantidadeCelula.append(quantidade);

                const valorCelula = document.createElement("td");
                valorCelula.textContent = formatarMoeda(produto.preco * produto.quantidade);
                linha.append(detalhe, quantidadeCelula, valorCelula);
                itensCarrinho.append(linha);
            });

            const subtotal = produtos.reduce(function (soma, produto) {
                return soma + produto.preco * produto.quantidade;
            }, 0);
            const frete = subtotal > 0 ? 50 : 0;
            document.getElementById("subtotal-carrinho").textContent = formatarMoeda(subtotal);
            document.getElementById("frete-carrinho").textContent = formatarMoeda(frete);
            document.getElementById("total-carrinho").textContent = formatarMoeda(subtotal + frete);
        };

        desenharCarrinho();
    }

    const menuItens = document.getElementById("MenuItens");
    const menuBotao = document.querySelector(".menu");

    if (menuItens && menuBotao) {
        const atualizarMenu = function () {
            if (window.innerWidth <= 800) {
                menuItens.style.maxHeight = menuItens.dataset.aberto === "true"
                    ? menuItens.scrollHeight + "px"
                    : "0px";
            } else {
                menuItens.style.maxHeight = "";
                menuItens.dataset.aberto = "false";
                menuBotao.setAttribute("aria-expanded", "false");
                menuBotao.setAttribute("aria-label", "Abrir menu");
            }
        };

        menuBotao.setAttribute("role", "button");
        menuBotao.setAttribute("tabindex", "0");
        menuBotao.setAttribute("aria-label", "Abrir menu");
        menuBotao.setAttribute("aria-expanded", "false");
        menuItens.dataset.aberto = "false";

        window.menuce = function () {
            if (window.innerWidth > 800) {
                return;
            }

            menuItens.dataset.aberto = menuItens.dataset.aberto !== "true"
                ? "true"
                : "false";
            menuBotao.setAttribute("aria-expanded", menuItens.dataset.aberto);
            menuBotao.setAttribute(
                "aria-label",
                menuItens.dataset.aberto === "true" ? "Fechar menu" : "Abrir menu"
            );
            atualizarMenu();
        };

        menuBotao.addEventListener("keydown", function (event) {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                window.menuce();
            }
        });

        window.addEventListener("resize", atualizarMenu);
        atualizarMenu();
    }

    const produtoImagem = document.getElementById("produtoImg");
    const miniaturas = document.querySelectorAll(".produtoMiniatura");

    if (!produtoImagem || miniaturas.length === 0) {
        return;
    }

    const selecionarMiniatura = function (miniatura) {
        if (produtoImagem.src === miniatura.src) {
            return;
        }

        produtoImagem.classList.add("trocando-imagem");
        const delay = window.matchMedia("(prefers-reduced-motion: reduce)").matches
            ? 0
            : 140;

        window.setTimeout(function () {
            produtoImagem.src = miniatura.src;
            produtoImagem.alt = miniatura.alt;
            produtoImagem.classList.remove("trocando-imagem");
        }, delay);

        miniaturas.forEach(function (item) {
            item.setAttribute("aria-pressed", String(item === miniatura));
        });
    };

    miniaturas.forEach(function (miniatura, index) {
        miniatura.setAttribute("role", "button");
        miniatura.setAttribute("tabindex", "0");
        miniatura.setAttribute("aria-label", "Ver imagem " + (index + 1));
        miniatura.setAttribute("aria-pressed", String(miniatura.src === produtoImagem.src));
        miniatura.addEventListener("click", function () {
            selecionarMiniatura(miniatura);
        });
        miniatura.addEventListener("keydown", function (event) {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                selecionarMiniatura(miniatura);
            }
        });
    });
});
