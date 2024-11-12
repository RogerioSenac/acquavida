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
            <img class="foto_capa" src="../Assets/imagem/hidro.jpg" class="icone" alt="icone" alt="hidroginastica">
            <p class="servico-texto">
                A hidroginástica é uma das atividades mais versáteis e eficazes para quem busca melhorar o condicionamento físico de forma suave e sem impacto. <br>
                Na <span class="servico-texto-realce"> Academia Acqua Vida </span>, a hidroginástica é projetada para promover a saúde e o bem-estar de alunos de todas as idades e níveis de condicionamento. Com foco em desenvolvimento físico, socialização e reabilitação, nossos programas de hidroginástica são realizados em um ambiente acolhedor e seguro, com profissionais qualificados para orientar cada aluno de acordo com suas necessidades e objetivos.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Benefícios da Hidroginástica.
                </span>
                A hidroginástica é uma atividade de baixo impacto, ideal para quem procura proteger as articulações e prevenir lesões. Exercitar-se na água oferece resistência natural, que fortalece os músculos e melhora a flexibilidade sem sobrecarregar o corpo. Isso a torna especialmente benéfica para idosos, pessoas em recuperação de lesões e gestantes, que precisam de uma atividade segura e eficaz para manter-se ativas.<br>
                Além do condicionamento físico, a hidroginástica é excelente para o sistema cardiovascular, ajudando a melhorar a circulação, controlar a pressão arterial e fortalecer o coração. A prática regular também ajuda a aumentar a capacidade respiratória e a resistência, contribuindo para uma maior disposição nas atividades do dia a dia.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Hidroginástica e Socialização.
                </span>
                Um dos maiores benefícios da hidroginástica na Acqua Vida é o ambiente de socialização. Durante as aulas, os alunos interagem e compartilham experiências, criando laços e amizades que vão além do momento do treino. Para muitos, a hidroginástica não é apenas uma forma de se exercitar, mas também uma maneira de se sentir parte de uma comunidade.

            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Hidroginástica como Ferramenta de Reabilitação.
                </span>
                Para aqueles que estão no processo de reabilitação, a hidroginástica oferece uma oportunidade de recuperar a força e a mobilidade de forma segura e controlada. O suporte da água reduz o peso sobre as articulações, tornando-a ideal para quem precisa de cuidados especiais após uma lesão ou cirurgia. Nossos profissionais são treinados para adaptar os exercícios de acordo com as limitações e necessidades de cada aluno, proporcionando uma reabilitação eficiente e confortável.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Hidroginástica: Saúde, Bem-estar e Diversão.
                </span>
                A hidroginástica na <span class="servico-texto-realce"> Academia Acqua Vida </span>é uma escolha para quem busca uma atividade completa, divertida e acessível a todos. Seja qual for seu objetivo — melhorar a saúde, recuperar-se de uma lesão ou socializar — a hidroginástica proporciona benefícios que vão muito além do físico, contribuindo para uma vida mais ativa, saudável e feliz.
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