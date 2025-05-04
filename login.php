<?php
session_start();
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    if (strlen($nome) < 2) {
        $erro = "Nome Inválido!";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome AND telefone = :telefone");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: index.php");
            exit;
        } else {
            $insert = $pdo->prepare("INSERT INTO usuarios (nome, telefone) VALUES (:nome, :telefone)");
            $insert->bindParam(':nome', $nome);
            $insert->bindParam(':telefone', $telefone);
            $insert->execute();

            $novoId = $pdo->lastInsertId();

            $_SESSION['usuario_id'] = $novoId;
            $_SESSION['nome'] = $nome;
            header("Location: index.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xt Cortes | Login</title>

    <!--* links -->
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div class="container">
        <h1 class="title">Xt Cortes</h1>
        <form class="form" action="" method="POST">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required />
            <input type="text" id="telefone" name="telefone" maxlength="11" placeholder="Digite seu telefone..." oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />

            <button type="submit" class="btn">Entrar</button>
        </form>
    </div>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>
</body>

</html>