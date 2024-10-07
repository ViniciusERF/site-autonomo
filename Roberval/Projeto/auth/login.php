<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container-formulario">
        <p class="titulo">Bem-vindo</p>
        <form class="formulario" action="login.php" method="POST">
            <input type="email" name="email" class="entrada" placeholder="Email" required>
            <input type="password" name="senha" class="entrada" placeholder="Senha" required>
            <?php
            session_start(); // Inicie a sessão
            
            if (isset($_POST["email"]) && isset($_POST["senha"])) {
                $email = $_POST["email"];
                $senha = $_POST["senha"];
            
                // Conecte-se ao banco de dados
                include_once("../conecta.php");
            
                // Prepare as consultas SQL para verificar o contratante ou autônomo
                $sql_contratante = "SELECT * FROM contratante WHERE email=?";
                $sql_autonomo = "SELECT * FROM autonomo WHERE email=?";
            
                // Usa prepared statements para maior segurança contra SQL injection
                if ($stmt = $conn->prepare($sql_contratante)) {
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result_contratante = $stmt->get_result();
            
                    if ($result_contratante->num_rows > 0) {
                        $row = $result_contratante->fetch_assoc();
            
                        // Verifique a senha
                        if (password_verify($senha, $row['senha'])) {
                            $_SESSION['user_id'] = $row['user_id']; // Armazena o ID do contratante
                            $_SESSION['user_type'] = 'contratante'; // Armazena o tipo de usuário
                            header("Location: ../../../../site-autonomo/Parte Vinicius/ProjetoTCC/src/landing-page.php");
                            exit();
                        } else {
                            echo "Senha incorreta.";
                        }
                    } else {
                        if ($stmt = $conn->prepare($sql_autonomo)) {
                            $stmt->bind_param("s", $email);
                            $stmt->execute();
                            $result_autonomo = $stmt->get_result();
            
                            if ($result_autonomo->num_rows > 0) {
                                $row = $result_autonomo->fetch_assoc();
            
                                // Verifique a senha
                                if (password_verify($senha, $row['senha'])) {
                                    $_SESSION['user_id'] = $row['user_id']; // Armazena o ID do autônomo
                                    $_SESSION['user_type'] = 'autonomo'; // Armazena o tipo de usuário
                                    header("Location: ../../../../site-autonomo/Parte Vinicius/ProjetoTCC/src/landing-page.php"); // Altere para a página correta do autônomo
                                    exit();
                                } else {
                                    echo "Senha incorreta.";
                                }
                            } else {
                                echo "Email não encontrado.";
                            }
                        }
                    }
                }
            }
            ?>
            <p class="link-pagina">
                <span class="texto-link-pagina">Esqueceu a senha?</span>
            </p>
            <button type="submit" class="botao-formulario">Entrar</button>
        </form>
        <p class="rotulo-cadastro">
            Não tem uma conta? <span class="link-cadastro" onclick="window.location.href='../escolha.php'">Cadastre-se</span>
        </p>
        <div class="container-botoes">
            <div class="botao-login-google">
                <svg class="icone-google" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
                    c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
                    c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
                    C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                    <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
                    c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                    <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
                    c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                </svg>
                <span>Entrar com Google</span>
            </div>
        </div>
    </div>



</body>
</html>
