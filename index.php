<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
?>

<?php
$title = "Página Inicial";
include_once "header.php";
?>

<main>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/imagem3.jpg" class="d-block w-100" alt="..." width=900 height=500>
            </div>
            <div class="carousel-item">
                <img src="imagens/imagem1.jpg" class="d-block w-100" alt="..." width=900 height=500>
            </div>
            <div class="carousel-item">
                <img src="imagens/imagem2.jpg" class="d-block w-100" alt="..." width=900 height=500>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>


    <div class="container py-5">
        <h2 class="pb-2 border-bottom">Encontre uma ONG e compartilhe seus conhecimentos</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">ONG Projeto Resgate</h3>
                    <p>O Projeto Resgate foi lançado em 1998, fruto do aprendizado de quatro anos de trabalhos voluntários. 
                        Foi concebido para dar uma resposta mais ampla à problemática socioeconômica que vive a população de baixa renda, 
                        uma conjuntura resultante dos efeitos cumulativos de gerações que começam e permanecem na base da pirâmide socioeconômica,
                        com poucas chances de ascensão social.  </p>
                    <a arget ="_blank" href="https://www.projetoresgate.org.br/quemsomos" class="btn btn-primary">
                        Saiba Mais
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">ONG Fé e Alegria</h3>
                    <p>A Fundação Fé e Alegria é uma obra de Educação Popular e Promoção Social da Companhia de Jesus que atende crianças, 
                        adolescentes, jovens e adultos em situação de vulnerabilidade social. Tem por premissa contribuir com o futuro de milhares
                         de pessoas e construir uma sociedade democrática, justa e solidária.Integrante da Federação Internacional de Fé e Alegria, 
                         atua no Brasil há 43 anos.</p>
                    <a target ="_blank" href="https://www.feyalegria.org/brasil/" class="btn btn-primary">
                        Saiba Mais
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">ONG Raizes</h3>
                    <p>Tudo começou em 2017, quando o fundador e atual presidente, Renan Morghett, um jovem de 23 anos que já 
                        fazia trabalho social informal, visitou a comunidade Jardim Edilene para entregar uma cesta básica. 
                        Renan viu uma realidade de vulnerabilidade social que nunca tinha visto em Joinville, e surgiu um desejo 
                        de transformar aquele lugar. Isso se tornou sua missão.</p>
                    <a target ="_blank" href="https://www.institutoraizes.com/sobre" class="btn btn-primary">
                        Saiba Mais
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

</main>

<?php
include_once "footer.php";
?>