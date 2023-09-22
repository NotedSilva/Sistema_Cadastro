<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Professor</title>
</head>
<body>

<?php
// Conexão com o banco de dados
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "curso_linux";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recuperando os dados do formulário
$nome = $_POST['nome'];
$ra = $_POST['ra'];
$senha = $_POST['senha'];
$curso = $_POST['curso'];
$media = $_POST['media'];
$frequencia = $_POST['frequencia'];

// Inserindo os dados na tabela de alunos
$sql = "INSERT INTO alunos (nome, ra, senha, curso, media, frequencia)
        VALUES ('$nome', '$ra', '$senha', '$curso', $media, $frequencia)";

if ($conn->query($sql) === TRUE) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o aluno: " . $conn->error;
}

$conn->close();
?>



    <title>Cadastro de Notas e Faltas - Professor</title>

    <h1>Cadastro de Notas e Faltas - Professor</h1>
    <form action="processar_notas_faltas_professor.php" method="POST">
        <label for="aluno_id">ID do Aluno:</label>
        <input type="text" name="aluno_id" required><br><br>

        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1"><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2"><br><br>

        <label for="nota3">Nota 3:</label>
        <input type="text" name="nota3"><br><br>

        <label for="nota4">Nota 4:</label>
        <input type="text" name="nota4"><br><br>

        <label for="faltas">Faltas:</label>
        <input type="text" name="faltas"><br><br>

        <input type="submit" value="Cadastrar Notas e Faltas">
    </form>
 
</body>
</html>