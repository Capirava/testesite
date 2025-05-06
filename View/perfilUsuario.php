<?php include '../Model/read.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/stylesPerfil.css">
    <script src="scriptPerfil.js"></script> 
    <title>Perfil usuário</title>
</head>
<body onload="habilitarSubmit(false)">
    <div class="flex-container">
        <section class="profile-box">
            <img class="edicao" onclick="habilitarInput()" src="../Estilos/editar.png" alt="editar"> 
            <div class="profile-container">
                <img class="foto" src="../Estilos/usuario.png" alt="foto-usuario">
                <p class="nome-usuario"><?php echo $usuario;?></p>
                <div class="botoes-perfil">
                    <a class="botao" href="../Model/logout.php">Sair</a>
                    <a class="botao" href="https://bombanet.000webhostapp.com/">Voltar</a>
                </div>
            </div>
        </section>
        <section class="info-box">
            <form class="info-container" action="../Model/update.php" method="POST">
                <h1>Dados pessoais</h1>
                <label>Nome:</label>
                <input id="nome" class="infos" name="usuario" type="text" value="<?php echo $usuario;?>" disabled required>
                <label>E-mail:</label>
                <input id="email" class="infos" name="email" type="email" value="<?php echo $email;?>" disabled required>
                <hr>
                <h1>Dados de entrega</h1>
                <label>CEP:</label>
                <input id="cep" class="infos" name="cep" type="text" value="<?php echo $cep;?>" maxlength="8" onblur="pesquisaCep(this.value)" disabled required> 
                <label>Cidade:</label>
                <input id="cidade" class="infos" name="cidade" type="text" value="<?php echo $cidade;?>" disabled required>
                <label>UF:</label>
                <input id="uf" class="infos" name="uf" type="text" value="<?php echo $uf;?>" maxlength="2" disabled required>
                <label>Endereço:</label>
                <input id="endereco" class="infos" name="endereco" type="text" value="<?php echo $endereco;?>" disabled required>
                <label>N°:</label>
                <input id="numero" class="infos" name="numero" type="text" value="<?php echo $numero;?>" maxlength="4" disabled required>
                <label>Bairro:</label>
                <input id="bairro" class="infos" name="bairro" type="text" value="<?php echo $bairro;?>" disabled required>
                <hr>
                <input id="salvar-info" class="botao" type="submit" value="Salvar Informações">
            </form>
        </section>
    </div>
</body>
</html>