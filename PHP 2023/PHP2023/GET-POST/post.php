<html>
    <body>
        <?php
            $num = $_POST["num"];
            $nom = $_POST["nome"];
            $id = $_POST["id"];

            print "<h3>Press CTRL + U</h3>";
            print "<p>O seu número escolhido: $num</p>
                    <p>Seu nome: $nom</p>
                    <p>Sua idade: $id</p>";
        ?>
    </body>
</html>