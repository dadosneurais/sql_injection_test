<?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    try {
        // Criar a conexão com o banco de dados
        $localhost = 'localhost';
        $user = 'root';
        $pass = 'senha';
        $db = 'db_web';

        $conexao = new mysqli($localhost,$user,$pass,$db);

        // Executa a query
        $query = "
            select * from sql_injection 
            where nome = '{$_POST['nome']}'
            and senha = '{$_POST['senha']}'
        ";
        
        $resultado = $conexao->query($query);

        foreach($resultado as $i){
            print_r($i);
            echo '<hr>';
        }

        // Fechar a conexão
        $conexao->close();

    } catch (Exception $e) {
        // Capturar exceções, se ocorrerem
        echo "Erro na conexão: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>sqlinjection</title>
        <meta charset="utf-8">

    </head>
    <body>
        <h3>sql injection</h3>
        <form method="post" action="sqlinjection.php">
            <label><input name="nome" placeholder="Insira seu nome"></label><br>
            <label><input name="senha" placeholder="Insira sua senha"></label><br>
            <label><input type="submit" value="Enviar"></label>
        </form>
    </body>
</html>
