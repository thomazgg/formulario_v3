<?php
	session_start();
	if (isset($_POST["botao"])) {
		$_SESSION["nome"]   =   $_POST["nome"];
		$_SESSION["email"]  =   $_POST["email"];
		$_SESSION["senha"]  =   $_POST["senha"];
        $_SESSION["cpf"]    =   $_POST["cpf"];
        $_SESSION["cel"]    =   $_POST["cel"];
        Header("location: etapa2.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario v3</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main class="container">

        <!-- Tela 1 – Dados Cadastrais-->

        <h2>Dados Cadastrais</h2>
        <form method="POST" action="index.php">
            <div class="input-field">
                <input type="text"      name="nome"     maxlength="40" required
                    placeholder="Nome de usuário">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="email"     name="email"    maxlength="40" required
                    placeholder="Email">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="password"  name="senha"    maxlength="40" required
                    placeholder="Senha">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"      name="cpf"      maxlength="15" required
                    placeholder="CPF">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"      name="cel"  maxlength="16" required
                    placeholder="Celular">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Continuar" name="botao" class="btn">
        </form>
    </main>
</body>
</html>