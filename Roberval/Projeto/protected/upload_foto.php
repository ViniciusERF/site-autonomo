<?php
// Inclui a verificação de login, se necessário
include '../auth/verifica_login.php';
protect();

// Verifica se a requisição foi feita via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        // Sanitiza a descrição
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        // Dados do arquivo de imagem
        $arquivoTmp = $_FILES['imagem']['tmp_name'];
        $nomeArquivo = basename($_FILES['imagem']['name']);
        $diretorioDestino = '../uploads/'; // Diretório de destino

        // Cria o diretório se ele não existir
        if (!is_dir($diretorioDestino)) {
            mkdir($diretorioDestino, 0755, true);
        }

        // Caminho final da imagem
        $caminhoFinal = $diretorioDestino . $nomeArquivo;

        // Move o arquivo para o diretório desejado
        if (move_uploaded_file($arquivoTmp, $caminhoFinal)) {
            // Conexão ao banco de dados
           include_once ('../conecta.php');

            // Pega o user_id do autônomo logado
            $autonomo_id = $_SESSION['user_id'];

            // Insere os dados na tabela publicacoes
            $sql = "INSERT INTO publicacoes (autonomo_id, imagem, descricao) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('iss', $autonomo_id, $caminhoFinal, $descricao);

            if ($stmt->execute()) {
                echo "Postagem realizada com sucesso!";
                // Redireciona de volta ao perfil (ou outra página)
                header('Location: perfil_autonomo.php');
            } else {
                echo "Erro ao salvar a postagem.";
            }

            // Fecha a conexão
            $stmt->close();
            $conn->close();
        } else {
            echo "Erro ao mover a imagem.";
        }
    } else {
        echo "Erro ao fazer o upload da imagem.";
    }
} else {
    echo "Requisição inválida.";
}
?>
