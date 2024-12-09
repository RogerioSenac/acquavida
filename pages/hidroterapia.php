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
            <img class="foto_capa" src="../Assets/imagem/hidroterapia.jpg" alt="hidroginastica">
            <p class="servico-texto">
                A hidroterapia é uma prática terapêutica que utiliza a água em diferentes formas e temperaturas para promover a saúde e o bem-estar. Através de exercícios específicos na água, ela pode oferecer uma série de benefícios tanto para o corpo quanto para a mente.
            </p>
            <p>
                <span class="alinhar-centro">
                    Benefícios da Hidroterapia.
                </span>
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Alívio da Dor e Relaxamento Muscular.
                </span>
                A hidroterapia é amplamente reconhecida por sua capacidade de ]aliviar dores musculares e articulares. A imersão em água quente ajuda a relaxar os músculos tensos, aliviar dores crônicas, como as causadas por artrite ou fibromialgia, e reduzir a rigidez das articulações. A pressão da água também pode atuar como uma forma de massagem natural, estimulando a circulação e proporcionando alívio imediato.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Hidroginástica e Socialização.
                </span>
                Um dos maiores benefícios da hidroginástica na Acqua Vida é o ambiente de socialização. Durante as aulas, os alunos interagem e compartilham experiências, criando laços e amizades que vão além do momento do treino. Para muitos, a hidroginástica não é apenas uma forma de se exercitar, mas também uma maneira de se sentir parte de uma comunidade.

            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Melhora na Circulação Sanguínea.
                </span>
                A água tem o efeito de aumentar a circulação sanguínea, especialmente quando combinada com movimentos terapêuticos, como caminhadas ou exercícios dentro d'água.Esse aumento da circulação ajuda a melhorar o transporte de oxigênio e nutrientes para as células, promovendo a recuperação de lesões e a saúde geral do sistema cardiovascular.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Redução do Estresse e Ansiedade.
                </span>
                Os efeitos calmantes da água têm um impacto significativo na redução do estresse e da ansiedade. A hidroterapia promove o relaxamento do corpo e da mente, diminuindo os níveis de cortisol (o hormônio do estresse). Além disso, a sensação de flutuação na água ajuda a reduzir a pressão sobre as articulações, proporcionando uma sensação de liberdade e leveza, que contribui para o bem-estar emocional.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Reabilitação de Lesões.
                </span>
                A água oferece uma resistência natural que permite a realização de exercícios sem sobrecarregar as articulações. Esse efeito torna a hidroterapia particularmente eficaz na reabilitação de lesões, permitindo que os pacientes realizem movimentos sem o risco de agravar a lesão. Além disso, a água ajuda a suportar o peso corporal, tornando os exercícios mais fáceis de realizar, mesmo para aqueles com mobilidade limitada.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Melhora da Flexibilidade e Mobilidade.
                </span>
                Os exercícios realizados na água promovem a flexibilidade e aumentam a amplitude de movimento das articulações. A água oferece resistência, o que contribui para o fortalecimento muscular e melhora da mobilidade, sem causar o impacto que os exercícios tradicionais em solo podem provocar.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Apoio no Controle de Peso.
                </span>
                A hidroterapia também pode ser uma aliada no controle de peso, pois os exercícios aquáticos, como a natação e o aquafitness, ajudam a queimar calorias enquanto minimizam o impacto nas articulações. Além disso, a imersão em água ajuda a reduzir o inchaço, proporcionando uma sensação de leveza após a atividade física.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Benefícios para a Pele.
                </span>
                Os banhos de hidroterapia com temperaturas variadas (quentes e frias) podem ter efeitos revigorantes para a pele, ajudando a melhorar sua aparência e saúde. A água quente pode ajudar a abrir os poros e a promover a desintoxicação, enquanto a água fria pode melhorar a circulação e tonificar a pele, deixando-a mais firme e rejuvenescida.
            </p>
            <p class="servico-texto">
                <span class="alinhar-centro">
                    Promoção do Bem-Estar Geral.
                </span>
                Além dos benefícios físicos, a hidroterapia tem um impacto positivo no estado psicológico e emocional. A prática regular ajuda a melhorar o humor, aumentar a sensação de bem-estar e promover uma sensação de relaxamento profundo. A combinação de água, movimento e respiração consciente pode ser uma forma eficaz de lidar com os desafios emocionais do dia a dia.
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