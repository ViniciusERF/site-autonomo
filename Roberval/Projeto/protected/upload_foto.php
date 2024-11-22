<?php
// Inclui a verificação de login e inicia a sessão
session_start();
include '../auth/verifica_login.php';
protect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        $arquivoTmp = $_FILES['imagem']['tmp_name'];
        $nomeArquivoOriginal = pathinfo($_FILES['imagem']['name'], PATHINFO_FILENAME);
        $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $nomeArquivo = $nomeArquivoOriginal . '_' . uniqid() . '.' . $extensao; // Nome único

        $diretorioDestino = '../uploads/';
        if (!is_dir($diretorioDestino)) {
            mkdir($diretorioDestino, 0755, true);
        }

        $caminhoFinal = $diretorioDestino . $nomeArquivo;

        if (move_uploaded_file($arquivoTmp, $caminhoFinal)) {
            include_once('../conecta.php');

            // Verifica se o ID do usuário está na sessão
            if (isset($_SESSION['user_id'])) {
                $autonomo_id = $_SESSION['user_id'];
                $sql = "INSERT INTO publicacoes (autonomo_id, imagem, descricao) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('iss', $autonomo_id, $nomeArquivo, $descricao);

                if ($stmt->execute()) {
                    echo "Postagem realizada com sucesso!";
                    header('Location: perfil_autonomo.php?user_id=' . $autonomo_id);
                    exit();
                } else {
                    echo "Erro ao salvar a postagem.";
                }

                $stmt->close();
                $conn->close();
            } else {
                echo "Erro: ID de usuário não encontrado.";
            }
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
