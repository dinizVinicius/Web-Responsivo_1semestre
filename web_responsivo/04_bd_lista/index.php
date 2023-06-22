<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistemas Web Responsivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <?php include("../menu.php"); ?>

  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Banco de Dados - Lista Responsiva</h1>
    <p>Listas de dados que cabem na tela do celular</p>
  </div>

  <div class="container-fluid mt-3">

    <h2>Lista com Países</h2>



    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nome Países</th>
            <th>Capital</th>
            <th>Idioma</th>
            <th>Continente</th>
            <th>População</th>
            <th>Lider Político</th>
            <th>Religião Dominante</th>
            <th>PIB</th>
            <th>IDH</th>
          </tr>
        </thead>
        </tbody>

        <?php
        include("../banco_dados_conexao.php");
        try {
          $sth = $dbh->prepare('SELECT * from paises');
          $sth->execute();
          $result = $sth->fetchAll(PDO::FETCH_ASSOC);
          if (!empty($result)) {
            foreach ($result as $row) {
              echo "<tr>";
              echo "<td>" . $row["nome"] . "</td>";
              echo "<td>" . $row["capital"] . "</td>";
              echo "<td>" . $row["idioma"] . "</td>";
              echo "<td>" . $row["continente"] . "</td>";
              echo "<td>" . $row["populacao"] . "</td>";
              echo "<td>" . $row["lider_politico"] . "</td>";
              echo "<td>" . $row["religiao_dominante"] . "</td>";
              echo "<td>" . $row["PIB"] . "</td>";
              echo "<td>" . $row["IDH"] . "</td>";
              echo "</tr>";
            }
          }
          $dbh = null;
        } catch (PDOException $e) {
          print "Error!: " . $e->getMessage();
          die();
        }
        ?>

        </tbody>
      </table>
    </div>




  </div>

  <br><b>
</body>

</html>