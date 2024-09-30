<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCONTRE!</title>
    <link rel="stylesheet" href="../src/css/landing-page.css">
    <link rel="icon" href="./css/img/landing-page/lupa-removebg-preview (1).png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Barra de navegação -->
    <header class="container-fluid p-3" id="nav-header">
        <section class="row">
            <div class="d-flex justify-content-between align-items-center p-0">
                <div class="col-2 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <a href=""><img src="./css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>
                </div>

                <!--<div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div id="nav-bar-search">
                        <input type="text" placeholder="Pedreiro, Pintor, Desenvolvedor..." id="nbs">
    
                        <a href="#">
                            <button id="search-button-filter">Filtrar</button>
                        </a>
                    </div>
                </div>-->

                <div class="d-flex col-10 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" id="header-links">
                    <a href="#area-servico">Serviços</a>
                    <a href="#area-feedback">Avaliações</a>
                    <a href="pagina-contrate.php" id="hire-button">Contrate</a>
                    <a href="#" id="hire-button">Entrar</a>

                </div>
            </div>
        </section>
    </header>

    <!-- Foto landing page -->
    <nav class="image-prospec ">
        <img src="../src/css/img/landing-page/img-1.jpg" alt="image-prospec" style="width: 100%;">
    </nav>

    <!-- Menu principal  -->
    <main> 

        <!-- Área dos serviços pedidos -->
        <section class="container-fluid" id="area-servico">
            <div class="row my-3">
                <img src="../src/css/img/landing-page/services-setas.svg" alt="Imagem de setas" class="col-3">
                <span id="better-services-title" class="col-6">Principais serviços pedidos</span>
                <img src="../src/css/img/landing-page/services-setas.svg" alt="Imagem de setas" class="col-3">
            </div>

            <div class="row d-flex justify-content-around">
                <div class="col-10 col-sm-6 col-lg-3 col-xl-3" id="services-box-1">
                    <div class="d-flex align-items-center">
                        <img src="../src/css/img/landing-page/designer-service.svg" alt="Imagem de serviço" class="image-service">
                        <p class="service-title-white">SAMANTA</p>
                    </div>
    
                    <div class="service-box-contents">
                        <h4 class="service-title-white">Designer</h4><br>
                        <p class="service-title-white">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou 
                            uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        </p>
                    </div>
    
                    <button id="button-service" class="mt-3">Solicitar orçamento</button>
                </div>
                
                <div class="col-sm-6 col-lg-3 col-xl-3" id="services-box-2">
                    <div class="d-flex align-items-center">
                        <img src="../src/css/img/landing-page/eu-service.svg" alt="Imagem de serviço" class="image-service">
                        <p class="service-title-white">VINICIUS</p>
                    </div>
    
                    <div class="service-box-contents">
                        <h4 class="service-title-white">Desenvolvedor</h4><br>
                        <p class="service-title-white">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou 
                            uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        </p>
                    </div>
                        
                    <button id="button-service" class="mt-3">Solicitar orçamento</button>
                </div>
                

                <div class="col-lg-3 col-xl-3" id="services-box-3">  
                    <div class="d-flex align-items-center">
                        <img src="../src/css/img/landing-page/pedreiro-service.svg" alt="Imagem de serviço" class="image-service">
                        <p class="service-title-white">CARLOS</p>
                    </div>                    

                    <div class="service-box-contents">
                        <h4 class="service-title-white">Pedreiro</h4><br>
                        <p class="service-title-white">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou 
                            uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        </p>
                    </div>

                    <button id="button-service" class="mt-3">Solicitar orçamento</button>
                </div>
            </div>
        </section>

        <!-- Área contendo feedback's dos clientes --> 
        <section class="container-fluid" id="area-feedback">
            <div class="row">
                <div class="col-12" id="feedback-content-title">
                    <h1>Experiências reais de nossos clientes</h1>
                    <p>Todos os dias muitos clientes escolhem a qualidade de nossos serviços</p>
                </div>
                
                <div class="d-flex justify-content-around">
                    <div class="col-12 col-sm-4 col-lg-3 col-xxl-3">
                        <img src="../src/css/img/landing-page/icon-avatar.svg" alt="Ícone avatar" class="image-feedback">
                        <p class="experience-box-individual">Roberval</p>

                        <p class="feedback-content-title">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou 
                            uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        </p>
                    </div>


                    <div class="col-sm-4 col-lg-3 col-xl-3 feedback-content1">
                        <img src="../src/css/img/landing-page/icon-avatar.svg" alt="Ícone avatar" class="image-feedback">
                        <p class="experience-box-individual">Jadison</p>

                        <p class="feedback-content-title">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou 
                            uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        </p>
                    </div>


                    <div class="col-lg-3 col-xl-3 feedback-content2">
                        <img src="../src/css/img/landing-page/icon-avatar.svg" alt="Ícone avatar" class="image-feedback">
                        <p class="experience-box-individual">Matheus</p>

                        <p class="feedback-content-title">Lorem Ipsum é simplesmente u    ma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou 
                            uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        </p>
                    </div>

                </div>
            </div>
        </section>
 
        <!-- Área de custo do site -->
        <div id="cost-content-pai">
            <img src="../src/css/img/landing-page/img-2.svg" alt="Layout interface" id="image-cost">
            <section class="container-fluid" id="cost-content">
                <div class="row">
                    <section class="d-flex col-12">
                        <div id="cost-content-child">
                            <div id="cost-service-contents-1">
                                <h1>QUANTO CUSTA ?</h1>    
                            </div>
                    
                            <div id="cost-service-contents-2">
                                <p>
                                    No ENCONTRE não cobramos mensalidade e você não paga nada para se cadastrar. 
                                    Você só investe nos serviços que tiver interesse e fica com 100% do valor negociado.
                                </p>
                            </div>
                                    
                            <div id="cost-service-contents-3">
                                <a href="pagina-contrate.html"><button class="button-service-cost">Contratar serviços</button></a>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>

    </main>

    
    <footer class="footer-web container-fluid">

        <div class="row d-flex justify-content-between">

            <div class="d-flex flex-column col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 col-xxl-6">
                <img src="./css/img/landing-page/ENCONTRE-tentativa-removebg.png" class="logo-empresa" alt="Logo empresa">
                <div id="footer-web-contents">
                    <div class="imagens-logo-icons ps-1">
                        <a href="" class="footer-social-links" id="facebook"><i class="fa-brands fa-facebook imagem-icons"></i></a>
                        <a href="" class="footer-social-links" id="linkedin"><i class="fa-brands fa-linkedin imagem-icons"></i></a>
                        <a href="" class="footer-social-links" id="youtube"><i class="fa-brands fa-youtube imagem-icons"></i></a>
                        <a href="" class="footer-social-links" id="instagram"><i class="fa-brands fa-instagram imagem-icons"></i></a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 col-xxl-6">

                    <article class="d-flex flex-column justify-content-center">
                        <strong class="footer-links-contents">Serviços</strong><br><br>
    
                        <div class="grid gap-3 row">
                            <span class="footer-links-contents"><a href="" >Assitência técnica</a></span>
                            <span class="footer-links-contents"><a href="">Design tecnológica</a></span>
                            <span class="footer-links-contents"><a href="">Consultoria</a></span>  
                        </div>     
                    </article>
            
                    <article class="d-flex flex-column justify-content-center">
                        <strong class="footer-links-contents">Institucional</strong><br><br>
            
                            <div class="grid gap-3 row">
                                <span class="footer-links-contents"><a href="">Quem somos</a></span>
                                <span class="footer-links-contents"><a href="">Trabalhe conosco</a></span>
                                <span class="footer-links-contents"><a href="">Profissionais</a> </span>
                            </div>               
                    </article>
            
                    <article class="d-flex flex-column justify-content-center">
                        <strong class="footer-links-contents">Sobre</strong><br><br>
            
                        <div class="grid gap-3 row">
                            <span class="footer-links-contents"><a href="">Termos e condições</a></span>
                            <span class="footer-links-contents"><a href="">Políticas de privacidade</a></span>
                            <span class="footer-links-contents"><a href="">Contato</a> </span> 
                        </div>              
                    </article>

            </div>
            <div class="footer-final">
                &#169
                2024 todos direitos reservados.
            </div>
        </div>
    </footer>




    <script src="index.js"></script>
</body>
</html> 