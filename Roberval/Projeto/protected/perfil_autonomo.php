<?php include '../auth/verifica_login.php'; 
protect();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuário</title>
    <link rel="stylesheet" href="../css/perfil-autonomo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="header-content">
            <a href="../../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="../../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>
        </div>
    </header>

    <section class="perfil-secao">


        <div class="cartao-perfil">
            <img src="../image/perfil.jpg" alt="Perfil do Usuário" class="foto-perfil">
            <h2>Vinicius</h2>
            <p>Desenvolvedor - Júnior</p>
            <div class="icone-configuracoes"><a href="https://w.app/Xl7HAD" target="about_blank"><i class="fa-brands fa-whatsapp"></i></a></div>
            <div class="descricao">
                <h3>Descrição Profissional:</h3>
                <p>Desenvolvedor Júnior é um profissional que acabou de iniciar sua carreira na área de desenvolvimento de software e está adquirindo conhecimento e habilidades práticas neste campo.</p>
            </div>
            <div class="endereco">
                <h3>Endereço</h3>
                <p>CEP: 19807-000</p>
                <p>Estado: São Paulo</p>
                <p>Cidade: Assis</p>
            </div>

            <div class="secao-postar-foto">
            <h3>Postar uma foto</h3>
            <form action="upload_foto.php" method="post" enctype="multipart/form-data">
                <label for="imagem">Escolha uma imagem:</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required>
                
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="3" placeholder="Digite uma descrição..." required></textarea>
                
                <button type="submit" class="botao-postar">Postar</button>
            </form>
        </div>
        </div>

        <div class="secao-posts">
            <div class="post">
                <div class="cabecalho-post">
                    <img src="../image/perfil.jpg" alt="Vinicius" class="foto-post">
                    <span>Vinicius</span>
                </div>
                <img src="../image/foto-postagem.jpg" alt="Imagem de código" class="imagem-post">
                <p>Descrição do post</p>
                
            </div>

            <div class="post">
                <div class="cabecalho-post">
                    <img src="../image/perfil.jpg" alt="Vinicius" class="foto-post">
                    <span>Vinicius </span>
                </div>
                <p>Texto do corpo do post. Como é um aplicativo social, às vezes é uma opinião, outras vezes uma pergunta.</p>
                
            </div>

            <div class="post">
                <div class="cabecalho-post">
                    <img src="../image/perfil.jpg" alt="Vinicius" class="foto-post">
                    <span>Vinicius </span>
                </div>
                <p>Texto do corpo do post. Às vezes é uma observação, às vezes busca recomendações.</p>
                
            </div>
        </div>
    </section>

    <footer class="footer-web">

<div class="footer-header">

    <img src="../../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-final">

    <div class="social-media-footer">
        <a href="" class="social-media-itens-1"><img src="../icon/Icon.svg" alt="facebook"></a>
        <a href="" class="social-media-itens-2"><img src="../icon/Icon-1.svg" alt="linkedin"></a>
        <a href="" class="social-media-itens-3"><img src="../icon/Icon-2.svg" alt="youtube"></a>
        <a href="" class="social-media-itens-4"><img src="../icon/Icon-3.svg" alt="instagram"></a>
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
