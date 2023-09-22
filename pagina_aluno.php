<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Aluno</title>
</head>
<body>

<h1>Bem-vindo à Página do Aluno</h1>


<h2>Curso: Linux Expert</h2>
<p>Carga Horária: 200 horas</p>
<p>Avaliações: 4</p>


<?php

$aluno_id = ''; 
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "curso_linux";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para obter a média e a frequência do aluno
$sql = "SELECT media, frequencia FROM alunos WHERE id = $aluno_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $media = $row["media"];
    $frequencia = $row["frequencia"];

    echo "<h2>Seu Desempenho</h2>";
    echo "<p>Média: $media</p>";
    echo "<p>Frequência: $frequencia%</p>";

    // Verificar se o aluno está aprovado
    if ($media > 80 && $frequencia > 75) {
        echo "<p>Parabéns! Você está aprovado no curso.</p>";

        // Opção para gerar o boletim e solicitar o certificado
        echo "<a href='gerar_boletim.php'>Gerar Boletim</a><br>";
        echo "<a href='solicitar_certificado.php'>Solicitar Certificado</a>";
    } else {
        echo "<p>Infelizmente, você não atende aos requisitos para aprovação no curso.</p>";
    }
} else {
    echo "Aluno não encontrado.";
}

$conn->close();
?>
    
</body>
</html>