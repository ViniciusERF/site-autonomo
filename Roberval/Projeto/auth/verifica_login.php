<?php

if (!function_exists('protect')) {

    function protect() {
        // Inclui o arquivo de conexão
        include('../conecta.php');

        // Verifica se a conexão foi estabelecida corretamente
        if (!isset($conn)) {
            die("Erro ao conectar com o banco de dados.");
        }

        // Faz a consulta no banco de dados
        $sql_code = 'SELECT * FROM contratante';
        $sql_query = $conn->query($sql_code);

        // Verifica se a consulta foi bem-sucedida
        if (!$sql_query) {
            die("Erro na consulta SQL: " . $conn->error);
        }

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            // Inicia a sessão se ainda não estiver ativa
            if (!isset($_SESSION)) {
                session_start();
            }

            // Define o ID do usuário na sessão
            $_SESSION['user_id'] = $usuario['user_id'];
        } else {
            // Verifica se o usuário está logado
            if (!isset($_SESSION['user_id']) || !is_numeric($_SESSION['user_id'])) {
                // Redireciona para a página de login
                header('Location: ../auth/login.php');
                exit();
            }
        }
    }
}
?>