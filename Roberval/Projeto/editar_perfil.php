<?php include 'verificacao_sessao'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="css/editar-perfil.css">
</head>
<body>
    <header>
        <div class="header-content">
            <a href="../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>     
        </div>
    </header>
    <main>
        <section class="editar-perfil">
            <h2>Editar perfil</h2>
            <div class="perfil-container">
                <div class="perfil-header">
                    <img src="./image/perfil.jpg" alt="Foto de perfil">
                    <div>
                        <h3>Vinicius</h3>
                        <a href="#">alterar foto de perfil</a>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="username">Nome completo</label>
                        <input type="text" id="username" value="" placeholder="Digite seu nome completo">
                    </div>
                    
                    <div class="form-group">
                        <label for="contato">Contato</label>
                        <input type="number" id="contato" value="" placeholder="Digite seu celular">
                    </div>

                    <div class="form-group">
                        <label for="data">Data de nascimento</label>
                        <input type="text" id="data" value="" placeholder="05/12/1997 ">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" value=""placeholder="19802-192">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" value=""placeholder="Digite o estado em que reside">
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" value=""placeholder="Assis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" id="cnpj" value=""placeholder="Digite seu CNPJ">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="" placeholder="Digite seu email">
                    </div>

                    <div class="form-group">
                        <label for="area">Areá de atuação</label>
                        <input type="text" id="area" value="" placeholder="**************">
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição Profissional</label>
                        <textarea id="descricao" rows="4" placeholder="Fala sobre suas experiências profissionais"></textarea>
                    </div>
                    <button type="submit">Salvar Alterações</button>
                </form>
            </div>
        </section>
    </main>
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
