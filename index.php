<?php
include($_SERVER['DOCUMENT_ROOT'] . "/Projeto-Acqua-Vida/includes/header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <link rel="stylesheet" href="./Assets/css/estilo.css">
    <link rel="shortcut icon" href="./Assets/imagem/favicone_logo_acqua.png" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
</head>

<body>
    TESTE GIT COM FTP
    <section class="container-video-apresenta">
        <h1>Prazer, somos a Acqua Vida!</h1>
        <article class="apresenta">
            <video id="meuVideo" controls>
                <source src="./Assets/videos/video_apresentacao.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </article>
        <h4>Ajuste o volume do seu aparelho e de play no video!<h4>
    </section>

    <section class="container-servico">
        <article class="servico">
            <p class="servico-texto">
                Temos atividades para toda a família:<br>
                Saiba Mais
            </p>
            <div class="row botoes-servicos">
                <div class="col-4">
                    <img src="./Assets/imagem/musculacao.png" class="icone" alt="musculação">
                    <a href="./pages/musculacao.php">Musculação</a>
                </div>
                <div class="col-4">
                    <img src="./Assets/imagem/hidroterapia.jpg" class="icone" alt="hidroterapia">
                    <a href="./pages/hidroterapia.php">Hidroterapia</a>
                </div>
                <div class="col-4">
                    <img src="./Assets/imagem/hidro.jpg" class="icone" alt="hidroginástica">
                    <a href="./pages/hidro.php">Hidroginástica</a>
                </div>
                <div class="col-4">
                    <img src="./Assets/imagem/natacao_junior.png" class="icone" alt="nataçao_junior">
                    <a href="./pages/baby.php">Natação Infantil</a>
                </div>
                <div class="col-4">
                    <img src="./Assets/imagem/natacao.png" class="icone" alt="natação">
                    <a href="./pages/natacao.php">Natação Geral</a>
                </div>
                <div class="col-4">
                    <img src="./Assets/imagem/avaliacao.png" class="icone" alt="avaliação">
                    <a href="./pages/avaliacao.php">Avaliação Física</a>
                </div>
            </div>

            <p class="servico-texto">
                Venha nos visitar e fazer uma aula experimental!
            </p>
        </article>
    </section>

    <section id="mapa" class="d-flex flex-column">
        <div class="content text-center">
            <h4>Click em Traçar Rota e <br>encontre-nos no Mapa</h4>
            <div id="map"></div>
            <button id="tracarRota" class="btn btn-danger">Traçar Rota</button>
        </div>
    </section>

    <?php
    include("./includes/footer.php")
    ?>

    <script>
        document.getElementById('meuVideo').addEventListener('ended', function() {
            window.location.href = 'index.php';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

    <!-- Leaflet.js (Mapas) -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-24.703404269966082, -48.00611380606861], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-24.703404269966082, -48.00611380606861]).addTo(map)
            .bindPopup('Academia Acqua Vida')
            .openPopup();

        document.getElementById('tracarRota').addEventListener('click', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var destination = "-24.703404269966082, -48.00611380606861";
                    var url =
                        `https://www.google.com/maps/dir/?api=1&origin=${lat},${lon}&destination=${destination}&travelmode=driving`;
                    window.open(url, '_blank');
                }, function() {
                    alert(
                        "Não foi possível acessar a localização. Verifique suas permissões de geolocalização.");
                });
            } else {
                alert("Geolocalização não é suportada pelo seu navegador.");
            }
        });
    </script>
</body>

</html>