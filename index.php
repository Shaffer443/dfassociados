<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"><!-- height=device-height - gera responsividade pelo dispositivo-->
        <!-- Melhoria de rankeamento -->
        <meta name="author" content="Rafael Gouveia (Shaffer)">
        <meta name="description" content="Site de Advocacia, Advogado Trabalhista, INSS">
        <!-- Fonte -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

        <title>DF Associados</title>
        
        <!-- fivicon -->
        <link rel="shortcut icon" href="/img/logos/dfassociados_327x763_recordada.png" type="image/x-icon">
        <link rel="icon" href="/img/logos/dfassociados_327x763_recordada.png" type="image/x-icon">
        <!-- CSS -->
         <link rel="stylesheet" href="style.css">
        <!-- Bootstrao Embarcado-->
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    </head>
    <body>

        <header class="section_header page-header">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-transparent" style="background:#CD9F60;">
                    <div class="rd-navbar-aside-outer rd-navbar-collapse">
                        <div class="rd-navbar-aside" style="margin-left: 100px; ">
                            <div class="rd-navbar-info">
                                <img src="/img/logos/whatsapp-brands-solid-full.svg" class="icone"><!-- Ajustar a distnacia no futuro-->
                                <a href="#" style="text-decoration: none; color: #1a1a1a;"><b>(81) 9 9999-9999</b></a>
                                <a href="#" style="text-decoration: none; color: #1a1a1a; margin-left: 1500px;"><b>Log In</b></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <nav class="transparente">
             <ul id="sem_marcacao">
                <li>Home</li>
                <li>Sobre</li>
                <li>Expertise</li>
                <li>Clientes</li>
                <li>Contato</li>
            </ul> 
        </nav>

        <main class="carrossel"> <!-- carrossel-->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    teste
                    <div class="carousel-item active">
                        <img src="/img/diversas/pexels-sora-shimazaki-5668473.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Precisa de Orientação Jurídica?</h5>
                            <p>Estamos Prontos para esclarecer suas dúvidas e oferecer o suporte juridico que você precisa.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/diversas/pexels-ekaterina-bolovtsova-6077091.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/diversas/pexels-ekaterina-bolovtsova-6077297.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </main>

        <!-- Área de teste de conexão embarcada -->
        <!-- <div class="container mt-5">
            <h1>Olá, Bootstrap Local!</h1>
            <p>Se este botão for azul, funcionou:</p>
            <button class="btn btn-primary">Botão de Teste</button>
        </div> -->

        <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>