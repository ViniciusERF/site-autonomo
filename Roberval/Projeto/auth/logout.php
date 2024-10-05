<?php
    session_start();
    session_unset(); // Limpa as variáveis da sessão
    session_destroy(); // Destrói a sessão
    header("Location: ../../../../site-autonomo/Roberval/Projeto/auth/login.php");
    exit();
?>