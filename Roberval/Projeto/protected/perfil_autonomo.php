<?php 
include '../auth/verifica_login.php'; 
protect();

if (isset($_GET['user_id'])) {
    $autonomo_id = $_GET['user_id'];
    //var_dump($autonomo_id); // Debug

    // Conecta ao banco de dados
    include_once('../conecta.php');

    // Consulta SQL para pegar os dados do autônomo
    $sql = "SELECT imagem, nome, tel, email, descricao, cep, estado, cidade, area FROM autonomo WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $autonomo_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifique se o autônomo existe
    if ($result->num_rows > 0) {
        // Pegar os dados do autônomo
        $row = $result->fetch_assoc();
        $imagem = $row['imagem'];
        $nome = $row['nome'];
        $tel = $row['tel'];
        $descricao = $row['descricao'];
        $area = $row['area'];
        $cep = $row['cep'];
        $estado = $row['estado'];
        $cidade = $row['cidade'];
        $email = $row['email'];

    } else {
        echo "Autônomo não encontrado.";
        exit();
    }
} else {
    echo "ID de autônomo não fornecido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuário</title>
    <link rel="stylesheet" href="../css/perfil-autonomo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-content">
            <a href="../../../Parte Vinicius/ProjetoTCC/src/landing-page.php"><img src="../../../Parte Vinicius/ProjetoTCC/src/css/img/landing-page/ENCONTRE-tentativa-removebg.png" alt="" class="logo-empresa-inicial"></a>
        </div>
    </header>
    
    <section class="perfil-secao">
        <div class="cartao-perfil">
            <img src="../uploads/<?php echo $imagem; ?>" alt="Perfil do Usuário" class="foto-perfil">
            <h2><?php echo $nome; ?></h2>
            <p><?php echo $tel; ?></p>
            
            <div class="icone-configuracoes">
                <a href="https://w.app/Xl7HAD" target="about_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="descricao">
                <h3>Descrição Profissional:</h3>
                <p><?php echo $descricao; ?></p>
                <p><?php echo $area; ?></p>
            </div>
            <div class="endereco">
                <h3>Endereço</h3>
                <p>CEP: <?php echo $cep; ?></p>
                <p>Estado: <?php echo $estado; ?></p>
                <p>Cidade: <?php echo $cidade; ?></p>
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
                <span><a href="" class="footer-links-contents">Assistência técnica</a></span>
                <span><a href="" class="footer-links-contents">Design tecnológica</a></span>
                <span><a href="" class="footer-links-contents">Consultoria</a></span>
            </article>

            <article class="footer-links-box">
                <strong class="footer-links-title">Institucional</strong><br><br>
                <span><a href="" class="footer-links-contents">Quem somos</a></span>
                <span><a href="" class="footer-links-contents">Trabalhe conosco</a></span>
                <span><a href="" class="footer-links-contents">Profissionais</a></span>
            </article>

            <article class="footer-links-box">
                <strong class="footer-links-title">Sobre</strong><br><br>
                <span><a href="" class="footer-links-contents">Termos e condições</a></span>
                <span><a href="" class="footer-links-contents">Políticas de privacidade</a></span>
                <span><a href="" class="footer-links-contents">Contato</a></span>
            </article>
        </div>
    </footer>
</body>
</html>
