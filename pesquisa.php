<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisar</title>
  </head>
  <body>

    <?php
        $pesquisa = $_POST['busca'] ?? '';
        
        include "conexao.php";

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);

        while($linha = mysqli_fetch_assoc($dados)) {
            foreach($linha as $key => $value) {
                echo "$key: $value<br>";
            }
            echo "<hr>";
        }
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca"/>
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Nome</th>
                            <td>Rua x</td>
                            <td>48 998087155</td>
                            <td>fulano@gmail.com</td>
                            <td>12/11/2001</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <a href="index.php" class="btn btn-info">Voltar ao início</a>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>