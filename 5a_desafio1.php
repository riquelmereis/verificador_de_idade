<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
</head>

<body>
    <h2>Cadastro</h2>
    <form action="" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="ano">Ano de Nascimento:</label><br>
        <input type="number" name="ano" id="senha"><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['nome'];
        $ano = $_POST['ano'];

        $arquivo = fopen('log_acessos.txt', 'a');

        if ($ano <= 2007) {
            echo "<script>alert(`Acesso permitido, ${nome}!`)</script>";

            $linha = 'Nome: ' . $nome . ' - Ano: ' . $ano . "\n";

            fwrite($arquivo, $linha);

            fclose($arquivo);
        } else {
            echo "<script>alert(`Acesso negado, ${nome}!`)</script>";
        }
    }
    ?>
</body>

</html>