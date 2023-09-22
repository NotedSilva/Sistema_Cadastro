<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de login</title>
</head>
<body>

<?php

$tipo = $_POST['tipo'];
$email = $_POST['ra'];
$senha = $_POST['senha'];


if ($tipo === 'aluno') {

    header('Location: pagina_aluno.php');
} elseif ($tipo === 'professor') {

    header('Location: pagina_professor.php');
} else {
 
    echo "Tipo de usuário inválido.";
}

$conn->close();
?>
    
</body>
</html>