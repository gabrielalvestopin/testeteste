<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP</title>
</head>
<body>
    <h1>Insira seu nome e apelido</h1>

    <form method="POST" action="salvar.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="apelido">Apelido:</label>
        <input type="text" id="apelido" name="apelido" required><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
