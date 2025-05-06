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
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Estilos/RegistroCSS.css">
        <title>Registro Web</title>
    </head>
        <title>Quadrado no Centro da Página</title>
    
    <body>
        <i class="theme-button" onclick="alternarTema()"></i>
        <div class="quadrado zoom-in" id="quadrado">
            <form action="../Model/register_process.php" class="formulario" method="POST">
                <tytle class="cabeca" id="cabeca" >Cadastro</tytle>
                <input class="box" id="username" name="usuario" placeholder="Nome" required >
                <input class="box" id="email" name="email" type="email" placeholder="Email" required >
                <input type="password" name="senha" id="password" placeholder="Informe sua senha" />
                <input class="box" type="password" name="confirmacao_senha" id="password_confirmed" placeholder="Confirme sua senha" />				<div class="registro" onclick="abrirNovaJanelaLog()">Voltar para o login</div>
                <input class="button" type="submit" value="Registrar">
            </form>
        </div>
    
        <script>
    
            window.addEventListener('load', function() {
              var quadrado = document.getElementById('quadrado');
                  quadrado.addEventListener('animationend', function() {
                    quadrado.classList.remove('zoom-in');
                  });
            });
    
            function abrirNovaJanelaLog() {
                  var quadrado = document.getElementById('quadrado');
                  //quadrado.classList.add('zoom-out');
    
                setTimeout(function() {
                    quadrado.classList.remove('zoom-out');
                    window.location.href = "login.php";
                }, 500);
            }
    
            function alternarTema() {
              var quadrado = document.getElementById('quadrado');
              quadrado.classList.toggle('dark-theme');
    
              var themeButton = document.querySelector('.theme-button');
                  if (quadrado.classList.contains('dark-theme')) {
                    themeButton.classList.remove('theme-button-light');
                    themeButton.classList.add('theme-button-dark');
                  } else {
                    themeButton.classList.remove('theme-button-dark');
                    themeButton.classList.add('theme-button-light');
                  }
    
                  function alternarTema() {
                      var body = document.body;
                      body.classList.toggle('dark-theme');
                    }
            }
    
    
        </script>
    
    
    
    
    </body>
    </html>