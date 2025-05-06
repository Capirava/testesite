<?php
include ("connect.php");
session_start();

if (!isset($_SESSION['user_id'])) {
   header("Location: https://bombanet.000webhostapp.com/");
    exit(); 
}

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM usuario WHERE id='$id'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usuario = $row["usuario"];
        $email = $row["email"];
        $cep = $row["cep"];
        $cidade = $row["cidade"];
        $uf = $row["uf"];
        $endereco = $row["endereco"];
        $numero = $row["numero"];
        $bairro = $row["bairro"];
    }
} 
$conn->close();
?>