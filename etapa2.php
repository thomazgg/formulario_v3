<?php
	session_start();
	if (isset($_POST["botao"])) {
		$_SESSION["ender"]   =   $_POST["ender"];
		$_SESSION["bairro"]  =   $_POST["bairro"];
        $_SESSION["cep"]     =   $_POST["cep"];
		$_SESSION["cidade"]  =   $_POST["cidade"];
        $_SESSION["estado"]  =   $_POST["estado"];
        $_SESSION["ref"]     =   $_POST["ref"];
        Header("location: etapa3.php");
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

        <!-- Tela 2 – Endereço de Entrega-->

        <h2>Endereço de Entrega</h2>
        <form method="POST" action="etapa2.php">
            <div class="input-field">
                <input type="text"      name="ender"    maxlength="40" required
                    placeholder="Endereço">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text"      name="bairro"    maxlength="40" required
                    placeholder="Bairro">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"      name="cep"          maxlength="09" required
                    placeholder="CEP">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"      name="cidade"   maxlength="20" required
                    placeholder="Cidade">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"      name="estado"   maxlength="02" required
                    placeholder="Estado">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"      name="ref"   maxlength="100"
                    placeholder="Referência (Opcional): Deixe uma mensagem para o vendedor">
                <div class="underline"></div>
            </div><br>
            
            <input type="submit" value="Continuar"  name="botao">
            <input type="button" onclick="history.back();" value="Voltar">
        </form>
        </div>
    </main>
</body>
</html>