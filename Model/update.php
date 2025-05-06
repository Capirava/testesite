<?php
include ("connect.php");
session_start();

$id = $_SESSION['user_id'];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];

$sql = "UPDATE usuario SET usuario='$usuario', email='$email', cep='$cep', cidade='$cidade', uf='$uf', endereco='$endereco', numero='$numero', bairro='$bairro' WHERE id='$id'";

$result = $conn->query($sql);

if($result) {
    header("Location: ../View/perfilUsuario.php");
    exit();
}
$conn->close();
?>