<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"><!-- height=device-height - gera responsividade pelo dispositivo-->
        <!-- Melhoria de rankeamento -->
        <meta name="author" content="Rafael Gouveia (Shaffer)">
        <meta name="description" content="Site de Advocacia, Advogado Trabalhista, INSS">
        <!-- Fonte Text-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

        <title>DF - Contato</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- fivicon -->
        <link rel="shortcut icon" href="/img/logos/dfassociados_327x763_recordada.png" type="image/x-icon">
        <link rel="icon" href="/img/logos/dfassociados_327x763_recordada.png" type="image/x-icon">
        <!-- CSS -->
         <link rel="stylesheet" href="style.css">
        <!-- Bootstrao Embarcado-->
        <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    </head>
    <body>

        <article>
            <img src="/img/dfassociados/faixa_df_2.png" alt="faixa_df">
        </article>
        

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
                <li><a href="/index.php">Home</a></li>
                <li><a href="/sobre/index.php">Quem Somos?</a></li>
                <li><a href="#">Expertise</a></li>
                <li><a href="/clientes/index.php">Clientes</a></li>
                <li><a href="#" style="color: #CD9F60;">Contato</a></li>
            </ul> 
        </nav>

        <section>
            <article class="tag_no_meio">
                <h1>Contato</h1>
            </article>
        </section>

        <article class="tag_no_meio">
            <hr style="width:50%;text-align:left;color: #CD9F60; margin:0px;">
        </article>
        <!-- Parte de contato -->
        <main>
            
            <section>
                <form action="envio.php" method="post">
                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Seu Nome e Sobrenome">
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Seu email">
                    </div>
                    <!-- Mensagem -->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Escreva sua Mensagem</label>
                        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3" placeholder="Deixe Sua Mensagem..."></textarea>
                    </div>
                    <!-- Botão -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit" name="enviar" style="background: #1F2646">Enviar</button>
                    </div>
                </form>
            </section>
            
                     
        </main>

        <!-- ####################### FOOTER ############################# -->
         <footer >
            <div class="container">
                <!-- <div class="footer-top"> -->
                    <div class="row">
                        <!-- <div class="col-md-6 col-lg-3 about-footer">
                            <h3>Informações </h3>
                            <ul>
                                <li><a href="tel:(010) 1234 4321"><i class="fas fa-phone fa-flip-horizontal"></i>(81) 9 99999999</a></li>
                                <li><i class="fas fa-map-marker-alt"></i>
                                    Rua Antônio Porfírio - 8A,
                                    <br/>Caueiras - Aliança, Pernambuco.
                                    <br/>Brazil 55890000
                                </li>
                            </ul>
                            <a href="" class="btn red-btn">Book Now</a>
                        </div> -->

                        <div class="col-md-6 col-lg-4 page-more-info">
                            <div class="footer-title">
                                <h4>Informações</h4>
                            </div>
                            <ul>
                                <li>
                                    <!-- <img src="/img/logos/whatsapp-brands-solid-full.svg" class="icone"> -->
                                    <a href="#" style="text-decoration: none; color: #CD9F60;"><b>(81) 9 9999-9999</b></a>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Rua Antônio Porfírio - 8A,
                                    <br/>Caueiras - Aliança, Pernambuco.
                                    <br/>Brasil 55890-000
                                </li>
                                <li>
                                    Seu direito garantido! 🔒
                                    <br/>Direito Previdenciário, Trabalhista e Criminal. ⚖
                                    <br/><br/>Fale com a gente através do link!
                                </li>
                                <!-- <li><a href="#">Ed do eiusmod tempor incididunt</a></li> -->
                            </ul>
                        </div>
                        

                        <div class="col-md-6 col-lg-3 open-hours">
                            <div class="footer-title">
                                <h4>Atendimento</h4>
                                <ul class="footer-social">
                                    <!-- <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li> -->
                                    <li><a href="https://www.instagram.com/dfassociados/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><i class="far fa-clock"></i>Segunda</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                     <tr>
                                        <td><i class="far fa-clock"></i>Terça</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock"></i>Quarta</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock"></i>Quinta</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock"></i>Sexta</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock"></i>Sábado</td>
                                        <td>8:00 - 12:00</td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>
                            
                            <div class="footer-logo">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><img src="/img/logos/dfassociados_327x763_recordada.png"></td>
                                            <td><img src="/img/diversas/oab-nc.png"></td>
                                            <!-- <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                            <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                            <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3 page-more-info">
                            <div class="footer-title">
                                <h4>Links</h4>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="https://www.oab.org.br/" target="_blank" rel="noopener noreferrer">OAB</a></li>
                                <li><a href="#">Web Para Processos</a></li>
                                <li><a href="https://www.instagram.com/dfassociados/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                        </div>

                    </div>
                <!-- </div> -->
                <hr>
                <div class="footer-bottom ">
                    <p>DF Associados @ 2025 All rights reserved</p>
                    <!-- <a href="https://linktr.ee/rafaelgouveia" style="font-size: 10px;" target="_blank" rel="noopener noreferrer">Criado por: Rafael Gouveia(Shaffer)</a> -->
                    <div  id="alinhando_no_centro">
                        <!-- <div class="col-sm-4">
                            <a href="" style="font-size: 10px;">Criado por: Rafael Gouveia(Shaffer)</a>
                        </div> -->
                        <!-- <div class="col-sm-8" >
                            <p>DF Associados @ 2025 All rights reserved</p>
                            <a href="https://linktr.ee/rafaelgouveia" style="font-size: 10px;" target="_blank" rel="noopener noreferrer">Criado por: Rafael Gouveia(Shaffer)</a>
                        </div> 
                        <div class="col-sm-8" id="alinhando_no_centro">
                            <p>DF Associados @ 2025 All rights reserved</p> 
                            <a href="https://linktr.ee/rafaelgouveia" style="font-size: 10px;" target="_blank" rel="noopener noreferrer">Criado por: Rafael Gouveia(Shaffer)</a>
                        </div> -->

                        <a href="https://linktr.ee/rafaelgouveia" style="font-size: 10px;" target="_blank" rel="noopener noreferrer">Criado por: Rafael Gouveia(Shaffer)</a>
                    </div>
                    <!-- <a href="https://linktr.ee/rafaelgouveia" style="font-size: 10px;" target="_blank" rel="noopener noreferrer">Criado por: Rafael Gouveia(Shaffer)</a> -->
                </div>
            </div>
        </footer>

        <!--  -->
        <!-- Área de teste de conexão embarcada -->
        <!-- <div class="container mt-5">
            <h1>Olá, Bootstrap Local!</h1>
            <p>Se este botão for azul, funcionou:</p>
            <button class="btn btn-primary">Botão de Teste</button>
        </div> -->

        <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>