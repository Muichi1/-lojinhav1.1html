document.addEventListener("DOMContentLoaded", function () {
    const entrar = document.getElementById("EntrarPainel");
    const cadastro = document.getElementById("CadastroSite");
    const indicador = document.getElementById("Indicador");

    if (!entrar || !cadastro || !indicador) {
        return;
    }

    window.mostrarCadastro = function () {
        entrar.style.transform = "translateX(-100%)";
        cadastro.style.transform = "translateX(0)";
        indicador.style.transform = "translateX(" +
            (window.innerWidth <= 600 ? "100px" : "150px") + ")";
    };

    window.mostrarEntrar = function () {
        entrar.style.transform = "translateX(0)";
        cadastro.style.transform = "translateX(100%)";
        indicador.style.transform = "translateX(0)";
    };

    window.addEventListener("resize", function () {
        if (cadastro.style.transform === "translateX(0px)" ||
            cadastro.style.transform === "translateX(0)") {
            indicador.style.transform = "translateX(" +
                (window.innerWidth <= 600 ? "100px" : "150px") + ")";
        }
    });
});
