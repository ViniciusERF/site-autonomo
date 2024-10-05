<?php
if (!function_exists('protect')) {

    function protect() {
        // Inicia a sessão no início, caso ainda não tenha sido iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Verifica se o usuário já está logado
        if (!isset($_SESSION['user_id']) || !is_numeric($_SESSION['user_id'])) {
            // Inclui o arquivo de conexão
            include('../conecta.php');

            // Verifica se a conexão foi estabelecida corretamente
            if (!isset($conn)) {
                die("Erro ao conectar com o banco de dados.");
            }

            // Realiza a consulta ao banco de dados (verifique o que deseja consultar)
            $sql_code = 'SELECT * FROM contratante WHERE user_id = ?'; // Exemplo para consulta específica
            $stmt = $conn->prepare($sql_code);
            $stmt->bind_param('i', $_SESSION['user_id']); // Vincula o ID da sessão na consulta
            $stmt->execute();
            $sql_query = $stmt->get_result();

            // Verifica se a consulta encontrou o usuário
            if ($sql_query->num_rows === 1) {
                $usuario = $sql_query->fetch_assoc();
                $_SESSION['user_id'] = $usuario['user_id']; // Atualiza a sessão com o ID do usuário
            } else {
                // Redireciona para a página de login se o usuário não estiver logado
                header('Location: ../auth/login.php');
                exit();
            }
        }
    }
}
?>