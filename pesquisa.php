<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>]

    <div class="container">

        <div class="row">
            <h1>Pesquisar</h1>
            <div class="col">
            <nav class="navbar bg-body-tertiary">
  <form  class="d-flex" role="search" atcion="pasquisar.php" mathod="POST" >
    <input class="form-control me-2"type="search" placeholde="Busca" aria-label="Search" name="busca">
    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
  </form>
</nav>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome completo</th>
                <th scope="col">Endereco</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de nacimento</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
                
 
            </div>

        </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>