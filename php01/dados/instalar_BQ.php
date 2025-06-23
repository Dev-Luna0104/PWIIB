<?php

include "conexao.php";


$tabelas = [

    "CREATE TABLE IF NOT EXISTS USUARIOS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        LOGIN VARCHAR(50) NOT NULL,
        SENHA VARCHAR(255) NOT NULL,
        ATIVO BIT DEFAULT 1
    )",

    "CREATE TABLE IF NOT EXISTS REFERENCIAS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        NOME VARCHAR(100) NOT NULL
    )",

    "CREATE TABLE IF NOT EXISTS DISCIPLINAS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        DISCIPLINA VARCHAR(100) NOT NULL
    )",

    "CREATE TABLE IF NOT EXISTS PERGUNTAS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        PERGUNTA TEXT NOT NULL,
        ID_DISCIPLINA INT,
        CONSTRAINT FK_DISCIPLINA FOREIGN KEY (ID_DISCIPLINA) REFERENCES DISCIPLINAS(ID)
    )",

    "CREATE TABLE alternativas (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        ID_PERGUNTA INT NOT NULL,
        TEXTO VARCHAR(255) NOT NULL,
        CORRETA BOOLEAN NOT NULL DEFAULT 0,
        FOREIGN KEY (ID_PERGUNTA) REFERENCES perguntas(ID)
    )",

    "CREATE TABLE IF NOT EXISTS REF_PERGUNTAS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        ID_PERGUNTA INT,
        ID_REF INT,
        CONSTRAINT FK_PERGUNTA FOREIGN KEY (ID_PERGUNTA) REFERENCES PERGUNTAS(ID),
        CONSTRAINT FK_REF FOREIGN KEY (ID_REF) REFERENCES REFERENCIAS(ID)
    )"
];


foreach ($tabelas as $sql) {
    if (!$conexao->query($sql)) {
        echo "Erro ao criar a tabela: " . $conexao->error . "<br>";
    }
}

// Inserção dos usuários (com senhas seguras)
$usuarios = [
    'ADMIN',
    'FELIPE MATHEUS YOSHIDA LAZARI',
    'LEONEL FRANCISCO DAMIAO',
    'LUCAS MATHEUS DE SOUZA DOS SANTOS',
    'LUÍS FELIPE GAZIRO GOMES',
    'MARLI EVANGELISTA',
    'MATHEUS DA CRUZ SAITU HIGA',
    'MATHEUS LUNA CAMARGO',
    'MATHEUS SELEGHIN ALEXANDRE',
    'MURILLO DE PAULA PEREIRA',
    'RYAN ROBIN VELOSO DE MATOS',
    'VITORIA FERNANDA FERRARI DA SILVA',
    'YURI RAFAEL DA SILVA SANTO'
];

foreach ($usuarios as $login) {
    $senha = password_hash('123senha', PASSWORD_DEFAULT);
    $stmt = $conexao->prepare("INSERT INTO USUARIOS (LOGIN, SENHA) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();
}

// disciplinas
$disciplinas = ['MATEMATICA', 'PORTUGUÉS'];

foreach ($disciplinas as $disc) {
    $stmt = $conexao->prepare("INSERT INTO DISCIPLINAS (DISCIPLINA) VALUES (?)");
    $stmt->bind_param("s", $disc);
    $stmt->execute();
}

echo "Tabelas criadas e dados inseridos com sucesso.<br>";

// Redireciona após tudo estar concluído
header("Location: ../usuarios.php");
exit;

?>
