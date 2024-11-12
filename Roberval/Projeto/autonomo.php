<?php include'auth/verifica_login.php';?>

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
                            <input type="text" id="tel" name="tel" placeholder="(00)0000-0000" required>
                        </div>

                        <div class="form-group">
                            <label for="dataN">Data de Nascimento</label>
                            <input type="date" id="dataN" name="dataN" placeholder="00/00/0000" required>
                        </div>

                        <div class="form-group">
                            <label for="descricao">Experiências</label>
                            <input type="text" id="descricao" name="descricao" placeholder="Pedreiro - 8 anos" required>
                        </div>

                        <div class="form-group">
                            <label for="senha">Área</label>
                            <input type="area" id="area" name="area" placeholder="Área de atuação">
                        </div>

                        <div class="form-group">
                            <label for="cep">Cep</label>
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
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="email@janesfakedomain.net" required>
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="***********" required>
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
ob_start();  // Inicia o buffer de saída

include 'auth/verifica_login.php'; // Verifique este arquivo para garantir que não haja saídas
include_once('conecta.php');       // Verifique este arquivo também

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        // Caminho temporário do arquivo no servidor
        $imagemTemp = $_FILES['imagem']['tmp_name'];
        $imagemNomeOriginal = $_FILES['imagem']['name'];
        $imagemNomeUnico = uniqid(rand(), true) . '_' . $imagemNomeOriginal;
        $destino = 'uploads/' . $imagemNomeUnico;

        if (move_uploaded_file($imagemTemp, $destino)) {
            $imagem = $imagemNomeUnico;
            $nome = $_POST['nome'] ?? '';
            $tel = $_POST['tel'] ?? '';
            $dataN = $_POST['dataN'] ?? '';
            $descricao = $_POST['descricao'] ?? '';
            $area = $_POST['area'] ?? '';
            $cep = $_POST['cep'] ?? '';
            $estado = $_POST['estado'] ?? '';
            $cidade = $_POST['cidade'] ?? '';
            $cnpj = $_POST['cnpj'] ?? '';
            $email = $_POST['email'] ?? '';
            $senhaHash = password_hash($_POST['senha'] ?? '', PASSWORD_DEFAULT);

            // Modifiquei aqui para incluir o campo user_id
            $sql = "INSERT INTO autonomo (imagem, nome, tel, dataN, descricao, area, cep, estado, cidade, cnpj, email, senha) 
                    VALUES ('$imagem', '$nome', '$tel', '$dataN', '$descricao', '$area', '$cep', '$estado', '$cidade', '$cnpj', '$email', '$senhaHash')";

            if ($conn->query($sql) === TRUE) {
                $autonomo_id = $conn->insert_id; // Obtenha o ID gerado

                echo "Autônomo ID gerado: " . $autonomo_id; // Debug
                header("Location: ../site-autonomo/Roberval/Projeto/protected/perfil_autonomo.php?user_id=".$autonomo_id);
                exit();
                
            } else {
                echo "Erro ao inserir no banco: " . $conn->error;
            }
        } else {
            echo "Erro ao salvar a imagem.";
        }
    } else {
        echo "Nenhuma imagem selecionada ou houve um erro no upload.";
    }
}

ob_end_flush();  // Envia todo o conteúdo armazenado no buffer
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