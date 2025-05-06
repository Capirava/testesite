<?php
include("../Model/readSession.php");
if($naSessao) {
    header("Location: ../View/perfilUsuario.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<svg xmlns="http://www.w3.org/2000/svg" class="theme-button" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
</svg>
<link rel="stylesheet" href="../Estilos/LoginCSS.css">

<body>
	<script type="text/javascript" src=index.js></script>

</body>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Web</title>
</head>

<body>
	<div class="container">
			<i class="theme-button" onclick="alternarTema()"></i>
			<div class="quadrado zoom-in" id="quadrado">
			<div class="quadrado" id="quadrado">
				<form action="../Model/login_process.php" method="POST" class="formulario">
					<tytle class="cabeca" id="cabeca" >Bem Vindo</tytle>
					<input class="box" id="email" type="email" name="email" placeholder="Email">
					<input class="box" id="password" type="password" name="senha" placeholder="Senha">
					<div class="registro" onclick="abrirNovaJanela()">Não tem uma conta?</div>
					<button class="button" type="submit">Login</button>
				</form>
			</div>
	</div>

</body>
</html>

<script>
	function abrirNovaJanela() {
               var quadrado = document.getElementById('quadrado');
               //quadrado.classList.add('zoom-out');
    
             setTimeout(function() {
                 quadrado.classList.remove('zoom-out');
                window.location.href = "../View/registro.php";
            }, 500);
        }
</script>