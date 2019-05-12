<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno']; // Mesmo nome que ta no name do form
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('$nome_aluno', '$data_nascimento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');


