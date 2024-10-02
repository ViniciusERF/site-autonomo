<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro autonomo</title>
    <link rel="stylesheet" href="./css/autonomo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Squada+One&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <div class="header-content">
        <a href="../../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="./image/logo.png" alt="Logo do Site" class="logo"></a>
        
    </div>
</header>


    <main>
        <form action="autonomo.php" method="POST">


            <div class="form-container">
                <div class="form-section">
                    <h2>Cadastre-se</h2>
                    <p>Área de cadastro para autonômo</p>
                    
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" id="imagem" name="imagem">
                    </div>
                    
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" placeholder="Seu nome">
                    </div>

                    <div class="form-group">
                        <label for="tel">Telefone</label>
                        <input type="text" id="tel" placeholder="(00)0000-0000">
                    </div>

                    <div class="form-group">
                        <label for="dataN">Data de Nascimento</label>
                        <input type="date" id="dataN" placeholder="00/00/0000">
                    </div>

                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" placeholder="19807-505">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" placeholder="SP , PR , SC , RR ....">
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" placeholder="Assis , Marilia , Tarumã ....">
                    </div>

                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" id="cnpj" placeholder="00.000.000/0000-00">
                    </div>

                    <div class="form-group">
                        <label for="descricao">Experiências</label>
                        <input type="text" id="descricao" placeholder="Pedreiro - 8 anos">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="email@janesfakedomain.net">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" placeholder="***********">
                    </div>


                    <input class="input-secundy" type="submit" value="Cadastrar">
                </div>

                <div class="form-section">
                    <img src="./image/trabalhadores.jpg" alt="Imagem Trabalhadores">
                
                    <h1 class="form-group">Atraves desde cadastro, o Freelancer acessará sua conta e seu perfil. Desta forma
                        terá mais visibilidade
                        de mostrar seus trabalhos e poderá receber avalições dos contratantes depois dos serviços decorridos.
                    </h1>
                </div>

                </div>
            </div>
        </form>
        <?php

        if(isset($_POST["imagem"])){
            $imagem = $_POST["imagem"];
        }
        else{
            $imagem = null;
        }

        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        else{
            $nome = null;
        }

        if(isset($_POST["tel"])){
            $tel = $_POST["tel"];
        }
        else{
            $tel = null;
        }

        if(isset($_POST["dataN"])){
            $dataN = $_POST["dataN"];
        }
        else{
            $dataN = null;
        }

        if(isset($_POST["cep"])){
            $cep = $_POST["cep"];
        }
        else{
            $cep = null;
        }

        if(isset($_POST["estado"])){
            $estado = $_POST["estado"];
        }
        else{
            $estado = null;
        }

        if(isset($_POST["cidade"])){
            $cidade = $_POST["cidade"];
        }
        else{
            $cidade = null;
        }

        if(isset($_POST["cnpj"])){
            $cnpj = $_POST["cnpj"];
        }
        else{
            $cnpj = null;
        }

        if(isset($_POST["descricao"])){
            $descricao = $_POST["descricao"];
        }
        else{
            $descricao = null;
        }
        
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
        else{
            $email = null;
        }

        if(isset($_POST["senha"])){
            $senha = $_POST["senha"];
        }
        else{
            $senha = null;
        }

         // Criptografa a senha antes de armazená-la
         $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
         
        if($nome != null and $tel !=null  and $dataN !=null  and $cep != null and $estado != null and $cidade !=null and $cnpj != null and $descricao != null and $email !=null and $senha != null){
            include_once("conecta.php");
            $sql = "INSERT INTO autonomo (imagem,nome, telefone , dataN, cep , estado , cidade,cnjp , descricao , email, senha) VALUES ('$imagem','$nome', '$tel', '$dataN', '$cep','$estado','$cidade','$cnpj','$descricao','$email' , '$senha')";
            
            if ($conn->query($sql) === TRUE) {
                // Redireciona para a página home após o cadastro bem-sucedido
                header("Location: .home.php");
                exit();
            } else {
                // Exibe um alerta de erro
                echo "<script>alert('Erro ao cadastrar: " . $conn->error . "');</script>";
            }
        } else {
            // Exibe um alerta se houver campos faltando
            echo "<script>alert('Por favor, preencha todos os campos corretamente!');</script>";
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