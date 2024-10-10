<?php
#Recebendo os parâmetros
$nome = $_POST["nome"];
$nota = $_POST["nota"];
$email = $_POST["email"];

#Conexão com BD
$ds = "mysql:host=localhost;dbname=escola";
$user = "root";
$pass = "vertrigo";
$db = new PDO($ds, $user, $pass);

# SQL para inserção
$query = "INSERT INTO aluno(nome, nota, email)
                        VALUES(?,?,?)";
    $stm = $db->prepare($query);
    $stm->bindParam(1, $nome);
    $stm->bindParam(2, $nota);
    $stm->bindParam(3, $email);

    # Executa o SQL
    if($stm->execute()){
        print "<p>Sucesso ao inserir!</p>";
        #header("location: index.html");
    }
    else{
        print "<p>Erro ao Inserir!</p>";
    }
?>