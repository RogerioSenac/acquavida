<?php
include("../includes/header.php")

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <!--Estilos da pagina-->
    <link rel="stylesheet" href="../Assets/css/estilo.css">

    <!--favicon-->
    <link rel="shortcut icon" href="../Assets/imagem/icone_logo_acqua.png" type="image/png">
</head>

<body>
    <!--quem somos-->
    <section class="container-quem-somos">
        <article class="servico">
            <img class="foto_capa" src="../Assets/imagem/avaliacao.png" class="icone" alt="icone" alt="avaliação">
            <p class="servico-texto">
                A avaliação física é um passo fundamental para o sucesso de qualquer programa de treinamento. Ela permite que os profissionais de educação física e treinadores compreendam as capacidades, necessidades e limitações de cada aluno, o que é essencial para o desenvolvimento de um plano de treinamento eficaz, seguro e alinhado aos objetivos individuais.<br>
                Na <span class="servico-texto-realce"> Academia Acqua Vida </span>, a avaliação física é o ponto de partida para qualquer modalidade, garantindo que cada aluno receba a atenção e o direcionamento adequado para o seu progresso.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Planejamento com Propósito e Objetividade.
                </span>
                Com uma avaliação física completa, é possível estabelecer metas claras e realistas para cada aluno. Este exame inicial fornece dados sobre a composição corporal, flexibilidade, força, resistência e outros indicadores de saúde. Com essas informações, o planejamento do treino se torna mais direcionado, respeitando as individualidades e priorizando os pontos que precisam de maior atenção.<br>
                Por exemplo, um aluno que busca ganho de massa muscular terá um treino específico para hipertrofia, com ênfase em exercícios e métodos que estimulem o desenvolvimento muscular. Já para quem procura emagrecimento, o foco pode ser em um treino com alta demanda calórica e estímulo cardiovascular.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Evidências da Eficácia da Avaliação Física.
                </span>
                Diversas pesquisas reforçam a importância da avaliação física na obtenção de resultados positivos. Estudos demonstram que o acompanhamento e a avaliação regular, quando integrados ao treinamento, aumentam significativamente a eficiência dos programas de condicionamento físico e a satisfação do aluno. Além disso, a avaliação permite o monitoramento dos resultados ao longo do tempo, ajustando o plano conforme o aluno evolui e atinge novas etapas de condicionamento.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Benefícios da Avaliação Física.
                </span>
                <b>* Eficiência no treinamento:</b> Ao conhecer os pontos fortes e áreas a serem melhoradas, o treino se torna mais objetivo e eficaz.<br>
                <b>* Redução de lesões:</b> A avaliação ajuda a identificar desequilíbrios musculares e articulares, evitando sobrecargas e prevenindo lesões.<br>
                <b>* Motivação e acompanhamento do progresso:</b> Com o acompanhamento dos resultados, o aluno tem maior motivação e clareza sobre seu avanço.<br>
                <b>* Segurança:</b> A personalização do treino garante uma prática segura, respeitando os limites e necessidades de cada aluno.
            </p>
        </article>
        <a href="../index.php" class="btn btn-secondary">Voltar</a>
    </section>

    <?php include("../includes/footer.php") ?>

</body>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para rolagem suave -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>


</html>