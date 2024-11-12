<?php
include($_SERVER['DOCUMENT_ROOT'] . "/Projetos_Git/Projeto-Acqua-Vida/includes/header.php");


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
            <img class="foto_capa" src="../Assets/imagem/musculacao.png" class="icone" alt="icone" alt="musculação">
            <p class="servico-texto">
                Na <span class="servico-texto-realce"> Academia Acqua Vida </span>, nossa abordagem à musculação vai muito além do treino tradicional. Cada aluno recebe atenção personalizada, com programas de treino desenhados para atender aos seus objetivos individuais — seja para melhorar o condicionamento físico, aprimorar a performance esportiva ou realizar uma reabilitação segura e eficaz. Com uma equipe de profissionais qualificados, oferecemos acompanhamento próximo e personalizado, ajustando os treinos de acordo com o progresso e as necessidades de cada fase.

            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">Importância da Musculação para a Saúde e Qualidade de Vida.</span>
                A musculação desempenha um papel fundamental na saúde física e mental. Ela não só contribui para o fortalecimento muscular, como também tem um impacto positivo na saúde óssea e na prevenção de lesões. A prática regular de musculação ajuda a combater a sarcopenia — perda de massa muscular associada ao envelhecimento —, que afeta a mobilidade e a independência, especialmente em idosos. O fortalecimento dos músculos e a melhora da resistência impactam diretamente na realização das atividades diárias, proporcionando mais disposição, equilíbrio e segurança nos movimentos cotidianos.

            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">Benefícios no Relacionamento e Bem-estar.</span>
                Além dos ganhos físicos, a musculação também proporciona benefícios no âmbito emocional e social. A prática regular ajuda a aliviar o estresse e a melhorar o humor, pois estimula a liberação de endorfinas, promovendo a sensação de bem-estar. Treinar em um ambiente motivador e de suporte também cria oportunidades para construir amizades e fortalecer o senso de comunidade. O convívio com outras pessoas que buscam um estilo de vida saudável pode inspirar, motivar e até mesmo criar novas conexões pessoais.

            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">Resultados para Todos os Objetivos.</span><br>
                Quer o seu objetivo seja estética, saúde, desempenho esportivo ou reabilitação, a musculação na Acqua Vida pode ser adaptada para atender às suas expectativas. Convidamos você a conhecer nossos programas e descobrir como a musculação pode transformar sua vida, promovendo não só o fortalecimento físico, mas uma evolução completa em bem-estar e qualidade de vida.
            </p>
        </article>

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