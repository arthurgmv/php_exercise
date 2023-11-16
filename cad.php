<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            $name = $_POST["nome"] ?? "Sem nome";
            $surname = $_POST["sobrenome"] ?? "Desconhecido";
            echo "<p> É um prazer te conhecer $name $surname.</p>"

        ?>
        <button style="background-color: #4CAF50; border-radius: 4px"><a style="color: #fff" href="javascript:history.go(-1)">Voltar à página anterior</a></button>
    </main>

</body>
</html>
