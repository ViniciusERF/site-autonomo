<?php

        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        else{
            $nome = null;
        }

        if(isset($_POST["tel"])){
            $tel = $_POST["tel"];
        }
        else{
            $tel = null;
        }

        if(isset($_POST["nas"])){
            $nas = $_POST["nas"];
        }
        else{
            $nas = null;
        }

        if(isset($_POST["cep"])){
            $cep = $_POST["cep"];
        }
        else{
            $cep = null;
        }

        if(isset($_POST["est"])){
            $est = $_POST["est"];
        }
        else{
            $est = null;
        }

        if(isset($_POST["cid"])){
            $cid = $_POST["cid"];
        }
        else{
            $cid = null;
        }

        if(isset($_POST["cnpj"])){
            $cnpj = $_POST["cnpj"];
        }
        else{
            $cnpj = null;
        }

        if(isset($_POST["exp"])){
            $exp = $_POST["exp"];
        }
        else{
            $exp = null;
        }

        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
        else{
            $email = null;
        }

        if(isset($_POST["senha"])){
            $senha = $_POST["senha"];
        }
        else{
            $senha = null;
        }

        if(isset($_POST["senha"])){
            $senha = $_POST["senha"];
        }
        else{
            $senha = null;
        }



        if($nome != null and $ende != null and $doc != null){
            include_once("conecta.php");
            $sql = "INSERT INTO usu (codusu, tipousu, nomeusu, endusu, docusu, statususu) VALUES (' ', '$nome', '$tel', '$nas', '$cep', '$est',
            cid
            cnpj
            exp
            email)";
            if($conn->query($sql) === TRUE){
                echo"<p>Cadastrado com sucesso!</p>"; 
            }
            else{
                echo"Erro:".$sql."<br>".$conn->error;
            }
        }

?>
    