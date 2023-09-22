<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Aluno</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(245,222,179), rgb(210,180,140));
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 45px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
        a.btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            font-size: 16px;
            margin-top: 20px;
        }

        a.btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<a class="btn" href="index.php">Voltar</a>

<h1>Cadastro de Alunos e Professores</h1>
    <form action="processar_aluno.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="ra">RA:</label>
        <input type="text" name="ra" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <label for="curso">Curso:</label>
        <input type="text" name="curso" required><br><br>

        <input type="submit" value="Cadastrar Aluno">
    </form>
    
</body>
</html>