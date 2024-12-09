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
            <img class="foto_capa" src="../Assets/imagem/natacao2.png" class="icone" alt="icone" alt="natacao">
            <p class="servico-texto">
                Na <span class="servico-texto-realce"> Academia Acqua Vida </span>, a modalidade de natação é pensada para ir além dos quatro estilos clássicos de nado. Nosso lema — desenvolver além dos 4 nados — reflete o compromisso de promover não só a técnica, mas também valores de vida, em um ambiente que atende crianças, jovens e adultos de 0 a 90 anos. Com uma abordagem formativa, buscamos desenvolver o comportamento e a técnica de cada aluno, respeitando as individualidades e fases de cada um.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">Importância da Natação para a Saúde</span>
                A natação é um dos esportes mais completos e benéficos para a saúde. Ela melhora a capacidade cardiovascular e respiratória, fortalece os músculos, aumenta a flexibilidade e alivia o estresse das articulações, sendo ideal para pessoas de todas as idades. Para as crianças, ela auxilia no desenvolvimento motor e no crescimento saudável. Para os adultos e idosos, ajuda na prevenção de doenças e na manutenção de um corpo ativo, além de ser uma ótima ferramenta para relaxamento e controle do estresse.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">Esporte e Formação de Caráter</span>
                Além dos benefícios físicos, a natação é uma poderosa ferramenta de formação de caráter. O esporte ensina valores fundamentais, como disciplina, perseverança e respeito. No ambiente da nossa academia, promovemos a cooperação, o respeito ao próximo e o autoconhecimento. Para as crianças, esse desenvolvimento é ainda mais importante, pois contribui para a construção de uma base sólida para um futuro cidadão responsável e consciente.
            </p>
            <p class="servico-texto">
                Nossa abordagem busca inspirar e transformar nossos alunos, incentivando-os a superar barreiras e desenvolver habilidades para a vida, além do esporte.
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