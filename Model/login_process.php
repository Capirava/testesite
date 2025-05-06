<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email    = $_POST["email"];
    $senha    = $_POST["senha"];

    $sql = "SELECT id, usuario, email, senha FROM usuario WHERE email = '$email'";
    $result = $conn->query($sql);

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($_POST["senha"], $senha_hash)) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["usuario"] = $row["usuario"];
            // Outros dados do usuário, se necessário
            header("Location: ../View/perfilUsuario.php"); // Redirecionar para a página de dashboard após o login
            exit();
        } else {
            echo "Senha incorreta";
            
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $conn->close();
}
?>