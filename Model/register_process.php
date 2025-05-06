<?php
include("connect.php"); //inclue o script de conexão da database
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario            = $_POST["usuario"];
    $email              = $_POST["email"];
    $senha              = $_POST["senha"];
    $confirmacao_senha  = $_POST["confirmacao_senha"];

    if ($senha == "") {
        $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
    } else if ($senha == $confirmacao_senha) {
        //Hash da password
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (usuario, email, senha) VALUES ('$usuario', '$email', '$senha_hash')";

        if($conn->query($sql) === TRUE) {
            $_SESSION["user_id"] = $conn->insert_id;
            $_SESSION["email"] = $email;
            header("Location: ../View/perfilUsuario.php");
            exit();
        } else {
            echo "Erro no registro: " . $conn->error;
        }
    } else {
        $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
    }
    $conn->close();
}
?>