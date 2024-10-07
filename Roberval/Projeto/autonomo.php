<?php include 'auth/verifica_login.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro autonomo</title>
    <link rel="stylesheet" href="css/autonomo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Squada+One&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <div class="header-content">
        <a href="../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="image/logo.png" alt="Logo do Site" class="logo"></a>
        
    </div>
</header>


    <main>
        <form action="autonomo.php" method="POST" enctype="multipart/form-data">


                <div class="form-container">
                    <div class="form-section">
                        <h2>Cadastre-se</h2>
                        <p>Área de cadastro para autonômo</p>
                        
                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" id="imagem" name="imagem" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                        </div>

                        <div class="form-group">
                            <label for="tel">Telefone</label>
                            <input type="text" id="tel" name="telefone" placeholder="(00)0000-0000" required>
                        </div>

                        <div class="form-group">
                            <label for="dataN">Data de Nascimento</label>
                            <input type="date" id="dataN" name="dataN" placeholder="00/00/0000" required>
                        </div>

                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" placeholder="19807-505" required>
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" placeholder="SP, PR, SC, RR ...." required>
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" placeholder="Assis, Marilia, Tarumã ...." required>
                        </div>

                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00" required>
                        </div>

                        <div class="form-group">
                            <label for="descricao">Experiências</label>
                            <input type="text" id="descricao" name="descricao" placeholder="Pedreiro - 8 anos" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="email@janesfakedomain.net" required>
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="***********" required>
                        </div>

                        <div class="form-group">
                            <label for="senha">Área</label>
                            <input type="area" id="area" name="area" placeholder="Área de atuação">
                        </div>

                        <input class="input-secundy" type="submit" value="Cadastrar">
                    </div>

                    <div class="form-section">
                        <img src="image/trabalhadores.jpg" alt="Imagem Trabalhadores">
                    
                        <h1 class="form-group">Atraves desse cadastro, o Freelancer acessará sua conta e seu perfil. Desta forma
                            terá mais visibilidade
                            de mostrar seus trabalhos e poderá receber avalições dos contratantes depois dos serviços decorridos.
                        </h1>
                    </div>

                </div>
            </div>
        </form>
        <?php    
            include_once('conecta.php');
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Verifique se a imagem foi carregada
                if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
                    // Caminho temporário do arquivo no servidor
                    $imagemTemp = $_FILES['imagem']['tmp_name'];
                    
                    // Nome original do arquivo
                    $imagemNomeOriginal = $_FILES['imagem']['name'];
                    
                    // Gera um identificador único
                    $imagemNomeUnico = uniqid(rand(), true) . '_' . $imagemNomeOriginal;
                    
                    // Caminho de destino
                    $destino = 'uploads/' . $imagemNomeUnico;
                    
                    // Mover o arquivo para o destino final
                    if (move_uploaded_file($imagemTemp, $destino)) {
                        $imagem = $imagemNomeUnico; // Variável a ser usada no SQL para salvar no banco
                        // A imagem foi salva com sucesso, agora insira os dados no banco de dados
                        $nome = $_POST['nome'];
                        $tel = $_POST['telefone'];
                        $dataN = $_POST['dataN'];
                        $cep = $_POST['cep'];
                        $estado = $_POST['estado'];
                        $cidade = $_POST['cidade'];
                        $cnpj = $_POST['cnpj'];
                        $descricao = $_POST['descricao'];
                        $email = $_POST['email'];
                        $senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha
                        $area = $_POST['area'];
            
                        // Comando SQL
                        $sql = "INSERT INTO autonomo (nome, telefone, dataN, cep, estado, cidade, cnpj, descricao, email, senha, imagem, area) 
                                VALUES ('$nome', '$tel', '$dataN', '$cep', '$estado', '$cidade', '$cnpj', '$descricao', '$email', '$senhaHash', '$imagem', '$area')";
            
                        // Executar a consulta
                        if ($conn->query($sql) === TRUE) {
                            header("Location: ../Parte Vinicius/ProjetoTCC/src/landing-page.php");
                            exit();
                        } else {
                            echo "Erro: " . $sql . "<br>" . $conn->error;
                        }
                    } else {
                        echo "Erro ao salvar a imagem.";
                    }
                } else {
                    echo "Nenhuma imagem selecionada ou houve um erro no upload.";
                }
            }
        ?>    
    </main>

    <footer class="footer-web">

        <div class="footer-header">

            <img src="../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-final">

            <div class="social-media-footer">
                <a href="" class="social-media-itens-1"><img src="icon/Icon.svg" alt="facebook"></a>
                <a href="" class="social-media-itens-2"><img src="icon/Icon-1.svg" alt="linkedin"></a>
                <a href="" class="social-media-itens-3"><img src="icon/Icon-2.svg" alt="youtube"></a>
                <a href="" class="social-media-itens-4"><img src="icon/Icon-3.svg" alt="instagram"></a>
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