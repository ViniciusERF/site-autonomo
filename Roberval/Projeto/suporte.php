<?php include 'verificacao_sessao'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Suporte</title>
    <link rel="stylesheet" href="./css/suporte.css">
</head>
<body>
    <header>
        <div class="header-content">
            <a href="../../../site-autonomo/Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>
        </div>
    </header>

    <section class="banner">
            <h1>Bem-vindo ao suporte, o que podemos te ajudar?</h1>
        </div>
    </section>

    <section class="services">
        <div class="service-box">
            <div class="icon">❌</div>
            <h2>Quero excluir minha conta</h2>
            <p>Você excluirá sua conta de cadastro, após 90 dias, não terá chance de recuperá-la.</p>
            <button class="btn-excluir">Excluir conta</button>
        </div>

        <div class="service-box">
            <div class="icon">💬</div>
            <h2>Suporte via WhatsApp</h2>
            <p>Seu suporte será via WhatsApp, você será direcionado.</p>
            <button class="btn-atendimento">Atendimento</button>
        </div>

        <div class="service-box">
            <div class="icon">🔑</div>
            <h2>Suporte na conta</h2>
            <p>Alterar senha, e-mail, fotos, documento e etc.</p>
            <button class="btn-suporte">Suporte</button>
        </div>
    </section>

    <section class="contact">
        <h2>Tire sua dúvida aqui, enviando sua mensagem.</h2>
        <form>
            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="E-mail">

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" placeholder="Assunto">

            <label for="mensagem">Escreva sua mensagem</label>
            <textarea id="mensagem" placeholder="descrição"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer class="footer-web">

<div class="footer-header">

    <img src="../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-final">

    <div class="social-media-footer">
        <a href="" class="social-media-itens-1"><img src="./icon/Icon.svg" alt="facebook"></a>
        <a href="" class="social-media-itens-2"><img src="./icon/Icon-1.svg" alt="linkedin"></a>
        <a href="" class="social-media-itens-3"><img src="./icon/Icon-2.svg" alt="youtube"></a>
        <a href="" class="social-media-itens-4"><img src="./icon/Icon-3.svg" alt="instagram"></a>
    </div>
</div>

<div class="footer-links">

        <article class="footer-links-box">
            <strong class="footer-links-title">Serviços</strong><br><br>

            <span><a href="" class="footer-links-contents">Assitência técnica</a></span>
            <span><a href="" class="footer-links-contents">Design tecnológica</a></span>
            <span><a href="" class="footer-links-contents">Consultoria</a></span>
                
        </article>

        <article class="footer-links-box">
            <strong class="footer-links-title">Institucional</strong><br><br>

                <span><a href="" class="footer-links-contents">Quem somos</a></span>
                <span><a href="" class="footer-links-contents">Trabalhe conosco</a></span>
                <span><a href="" class="footer-links-contents">Profissionais</a> </span>               

        </article>

        <article class="footer-links-box">
            <strong class="footer-links-title">Sobre</strong><br><br>

            <span><a href="" class="footer-links-contents">Termos e condições</a></span>
            <span><a href="" class="footer-links-contents">Políticas de privacidade</a></span>
            <span><a href="" class="footer-links-contents">Contato</a> </span>               

        </article>
</div>

</footer>
</body>
</html>
