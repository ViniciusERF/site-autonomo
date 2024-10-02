<!--<?php include 'verificacao_sessao'; ?>-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Contratantes</title>
    <link rel="stylesheet" href="./css/contratante.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Squada+One&display=swap" rel="stylesheet">
</head>

<body>

<header>
        <div class="header-content">
            <a href="../../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="../../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>
        </div>
    </header>

    <main>
        <form action="contratante.php" method="POST">

            <div class="form-container">
                <div class="form-section">
                    <h2>Cadastre-se</h2>
                    <p>Área de cadastro Contratante</p>

                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" name="nome" placeholder="Jane Smitherton">
                    </div>

                    <div class="form-group">
                        <label for="tel">Telefone</label>
                        <input type="text" name="tel" placeholder="Digite seu número de contato">
                    </div>

                    <div class="form-group">
                        <label for="dataN">Data de Nascimento</label>
                        <input type="date" name="dataN" placeholder="00/00/0000">
                    </div>

                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" placeholder="0000-000">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" placeholder="SP , SC , PR ....">
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" placeholder="Assis , Candido Mota ....">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="email@janesfakedomain.net">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="***********">
                    </div>

                    <input class="input-secundy" type="submit" value="Cadastrar">
                </div>

                <div class="form-section">
                    <img src="./image/maos.png" alt="Imagem Trato Feito">
                
                    <h1 class="form-group">Através desse cadastro o Contratante terá sua conta para ser acessada, sendo assim poderá ver 
                        o perfil de vários Freelancers para sua contratação especifica. 
                    </h1>
                </div>

                </div>
            </div>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? null;
    $tel = $_POST["tel"] ?? null;
    $dataN = $_POST["dataN"] ?? null;
    $cep = $_POST["cep"] ?? null;
    $estado = $_POST["estado"] ?? null;
    $cidade = $_POST["cidade"] ?? null;
    $email = $_POST["email"] ?? null;
    $senha = $_POST["senha"] ?? null;

    // Criptografar a senha antes de armazená-la
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se todos os campos foram preenchidos
    if ($nome && $tel && $dataN && $cep && $estado && $cidade && $email && $senha) {
        include_once("conecta.php");
        
        // Prepara a consulta SQL
        $sql = "INSERT INTO contratante (nome, tel, dataN, cep, estado, cidade, email, senha) 
                VALUES ('$nome', '$tel', '$dataN', '$cep', '$estado', '$cidade', '$email', '$senhaHash')";

        // Executa a consulta
        if ($conn->query($sql) === TRUE) {
            // Redireciona para a página home após o cadastro bem-sucedido
            header("Location:  ../../ProjetoTCC/Parte Vinicius/ProjetoTCC/src/landing-page.php");
            exit();
        } else {
            // Exibe um alerta de erro
            echo "<script>alert('Erro ao cadastrar: " . $conn->error . "');</script>";
        }
    } else {
        // Exibe um alerta se houver campos faltando
        echo "<script>alert('Por favor, preencha todos os campos corretamente!');</script>";
    }
}
?>


    </main>

    <footer class="footer-web">

<div class="footer-header">

    <img src="../../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-final">

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