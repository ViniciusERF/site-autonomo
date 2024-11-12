<?php include '../auth/verifica_login.php'; 
protect();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../css/editar-perfil.css">
</head>
<body>
    <header>
        <div class="header-content">
            <a href="../../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="../../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>     
        </div>
    </header>
    <main>
        <?php 
            include_once('../conecta.php'); // Certifique-se de que isso está no início do arquivo
            // Supondo que você tenha um ID de usuário em sessão
            $userId = $_SESSION['user_id']; // Ou o que você estiver usando para identificar o usuário
            
            if(isset($userId)){
                $sql = "SELECT imagem, nome, tel, dataN, descricao,area ,cep, estado, cidade, cnpj, email FROM autonomo WHERE user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $userId);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    $userData = $result->fetch_assoc();
                } else {
                    echo "Usuário não encontrado.";
                }
            }
        ?>
        <section class="editar-perfil">
            <div class="perfil-container">
                <form  method="POST" action="editar_perfil.php" enctype="multipart/form-data">
                    <h2>Editar perfil</h2>
                    <div class="perfil-header">
                        <img src="../uploads/<?php echo htmlspecialchars($userData['imagem']); ?>" alt="Foto de perfil">
                        <div>
                            <h3><?php echo htmlspecialchars($userData['nome']); ?></h3>
                            <input type="file" id="imagem" name="imagem" required>
                            <label for="imagem">Alterar foto de perfil</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Nome completo</label>
                        <input type="text" id="username" name="nome" value="<?php echo htmlspecialchars($userData['nome']); ?>" placeholder="Digite seu nome completo" readonly>
                    </div>

                    <div class="form-group">
                        <label for="contato">Contato</label>
                        <input type="number" id="contato" name="telefone" value="<?php echo htmlspecialchars($userData['tel']); ?>" placeholder="Digite seu celular" readonly>
                    </div>

                    <div class="form-group">
                        <label for="data">Data de nascimento</label>
                        <input type="text" id="data" name="dataN" value="<?php echo htmlspecialchars($userData['dataN']); ?>" placeholder="05/12/1997" readonly>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" value="<?php echo htmlspecialchars($userData['cep']); ?>" placeholder="19806271" readonly>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" value="<?php echo htmlspecialchars($userData['estado']); ?>" placeholder="Digite o estado em que reside" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" value="<?php echo htmlspecialchars($userData['cidade']); ?>" placeholder="Assis" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" id="cnpj" name="cnpj" value="<?php echo htmlspecialchars($userData['cnpj']); ?>" placeholder="Digite seu CNPJ" readonly>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição Profissional</label>
                        <input id="descricao" name="descricao" rows="4"  value="<?php echo htmlspecialchars($userData['descricao']); ?>" placeholder="Fala sobre suas experiências profissionais" readonly></input>
                    </div>

                    <div class="form-group">
                        <label for="area">Areá de atuação</label>
                        <input type="text" id="area" name="area" value="<?php echo htmlspecialchars($userData['area']); ?>"  placeholder="Área do trabalho" readonly>
                    </div>

                    <button type="button" id="editButton">Editar</button>
                    <button type="submit" id="submitButton" style="display:none;">Salvar Alterações</button>

                    <!-- Botão para editar alterações -->
                
                <?php 
                    include_once('../conecta.php'); // Inclua sua conexão com o banco de dados
                    
                    $userId = $_SESSION['user_id']; // ID do usuário logado
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Obtenha os dados do formulário
                        $nome = $_POST['nome'];
                        $telefone = $_POST['telefone'];
                        $dataN = $_POST['dataN'];
                        $cep = $_POST['cep'];
                        $estado = $_POST['estado'];
                        $cidade = $_POST['cidade'];
                        $cnpj = $_POST['cnpj'];
                        $descricao = $_POST['descricao'];
                        
                        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
                            // Caminho temporário do arquivo no servidor
                            $imagemTemp = $_FILES['imagem']['tmp_name'];
                            
                            // Nome original do arquivo
                            $imagemNomeOriginal = $_FILES['imagem']['name'];
                            
                            // Gera um identificador único
                            $imagemNomeUnico = uniqid(rand(), true) . '_' . $imagemNomeOriginal;
                            
                            // Caminho de destino
                            $destino = '../uploads/' . $imagemNomeUnico;
                        
                            // Mover o arquivo para o destino final
                            if (move_uploaded_file($imagemTemp, $destino)) {
                                //Echo que estava usando para Debugger
                                 
                                // Salve apenas o nome do arquivo único no banco de dados
                                $imagem = $imagemNomeUnico;
                                echo $imagem; // Variável a ser usada no SQL para salvar no banco
                            } else {
                                //Echo para Debugger
                                echo "";
                            }
                        } else {
                            echo "Nenhuma imagem foi enviada ou ocorreu um erro no upload.";
                        }
                        
                        $area = $_POST['area'];
                        // Continue com os outros campos...
                        
                        // Prepare e execute a atualização no banco de dados
                        $sql = "UPDATE autonomo SET nome = ?, telefone = ?, dataN = ?, cep = ?, estado = ?, cidade = ?, cnpj = ?, descricao = ?, imagem = ?, area = ? WHERE user_id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('ssssssssssi', $nome, $telefone, $dataN, $cep, $estado, $cidade, $cnpj, $descricao, $imagem, $area, $userId);

                        
                        if ($stmt->execute()) {
                            echo "Dados atualizados com sucesso!";
                            exit(header("Location: ../../../Parte Vinicius/ProjetoTCC/src/landing-page.php")); // Redirecione para o perfil ou outra página
                        } else {
                            echo "Erro ao atualizar dados: " . $conn->error;
                        }
                    }
                    ?>

                </form>
                    <script>
                        document.getElementById('editButton').addEventListener('click', function() {
                            const inputs = document.querySelectorAll('input');
                            inputs.forEach(input => {
                                input.removeAttribute('readonly');
                            });
                            
                            // Exibe o botão de enviar após ativar os campos para edição
                            document.getElementById('submitButton').style.display = 'inline';
                        });
                    </script>
            </div>
        </section>
    </main>
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
