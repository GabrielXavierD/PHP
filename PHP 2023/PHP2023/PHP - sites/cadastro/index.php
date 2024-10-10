<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de Aluno</h3>
    <form method="post" action="salva.php">
        <label>Nome: </label>
        <input name="nome"><br>
        <label>Nota: </label>
        <input name="nota"><br>
        <label>E-mail: </label>
        <input name="email"><br>
        <button type="submit">Cadastrar</button>
    </form>
    <h3>Listagem de Alunos</h3>
    
    <?php
    #Conexão com BD
        $ds = "mysql:host=localhost;dbname=escola";
        $user = "root";
        $pass = "vertrigo";
        $db = new PDO($ds, $user, $pass);
        # SQL para listagem
        $query = "SELECT * from aluno";
        $stm = $db->prepare($query);

        #Executa SQL
        if ($stm->execute()){
            while($row = $stm->fetch()){
              $id = $row["alunoid"];
              $nome = $row["nome"];
              $nota = $row["nota"];
              $email = $row["email"];

              print "<p>$id - $nome - $nota - $email</p>";
            }
        }   
        else {
            print "<p>Erro ao Listar!</p>";
        }
    ?>
    </body>
</html>