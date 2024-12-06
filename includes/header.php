<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <!-- Ícone Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" type="text/css" href="../Assets/css/estilo.css">
</head>

<body>
    <!-- Cabeçalho e Navegação -->
    <div class="container-fluid">
        <a class="piscina" href="#">
            <img src="../Assets/imagem/logo_acqua_vida.jpg" alt="Logotipo"
                class="img-fluid">
        </a>
    </div>
    <h1 class="texto">Somos uma equipe promovendo Saúde!</h1>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" data-bs-theme="dark">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/quem_somos.php">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/AcademiaAcquaVida/photos_by?locale=pt_BR" target="_blank">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/AcademiaAcquaVida/videos?locale=pt_BR" target="_blank">Videos</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const navbar = document.querySelector('.navbar');
        const navbarCollapse = document.querySelector('.navbar-collapse');

        // Exibe o menu quando o mouse entra na área do menu
        navbar.addEventListener('mouseenter', function() {
            navbarCollapse.style.display = 'block';
        });

        // Esconde o menu quando o mouse sai da área do menu
        navbar.addEventListener('mouseleave', function() {
            navbarCollapse.style.display = 'none';
        });
    </script>

</body>

</html>