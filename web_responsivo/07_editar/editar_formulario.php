<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistemas Web Responsivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    
<?php include("../menu.php"); ?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Banco de Dados - Tela de edição</h1>
  <p>Responsividade com Bootstrap e Media Queries</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Editar</h1>
  <p>Aqui temos 3 níveis de responsividade:</p>
  <ul>
  <li>Em telas maiores, os campos são apresentados em 2 colunas.</li>
  <li>Em telas menores, aparece apenas 1 coluna de campos.</li>
  <li>Em telas menores de 600px, Media Query é usado para ocultar os <i>labels</i></li>
  </ul>

<!-- Warning Alert -->
<div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
    <i class="bi-exclamation-triangle-fill"> Esse formulário é uma cópia da tela de cadastro. Porém, o banco de dados é acessado para preencher o formulário com os dados do item a ser alterado.</i>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<?php 
  $id = $_GET['id'];
?>

<?php
    include("../banco_dados_conexao.php");
    try {
      
      $sth = $dbh->prepare("SELECT * FROM paises WHERE id = ?");
      $sth->bindParam( 1, $id );
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }
?>

  <form name="myForm" action="editar_action_page.php" onsubmit="return validateForm()" method="post">
    <div class="row">
      <div class="col-md-6 mt-1">
        <label for="col-02">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Valor para coluna 02" name="nome" value="<?php echo $result[0]["nome"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-03">Capital:</label>
        <input type="text" class="form-control" id="capital" placeholder="Valor para coluna 03" name="capital" value="<?php echo $result[0]["capital"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-04">Idioma:</label>
        <input type="text" class="form-control" id="idioma" placeholder="Valor para coluna 04" name="idioma" value="<?php echo $result[0]["idioma"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-02">Continente:</label>
        <input type="text" class="form-control" id="continente" placeholder="Valor para coluna 02" name="continente" value="<?php echo $result[0]["continente"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-05">População:</label>
        <input type="text" class="form-control" id="populacao" placeholder="Valor para coluna 05" name="populacao" value="<?php echo $result[0]["populacao"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-06 mt-1">Lider Político:</label>
        <input type="text" class="form-control" id="lider_politico" placeholder="Valor para coluna 06" name="lider_politico" value="<?php echo $result[0]["lider_politico"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-07">Religião Dominante:</label>
        <input type="text" class="form-control" id="religiao_dominante" placeholder="Valor para coluna 07" name="religiao_dominante" value="<?php echo $result[0]["religiao_dominante"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-08">PIB:</label>
        <input type="text" class="form-control" id="PIB" placeholder="Valor para coluna 08" name="PIB" value="<?php echo $result[0]["PIB"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-09">IDH:</label>
        <input type="text" class="form-control" id="IDH" placeholder="Valor para coluna 09" name="IDH" value="<?php echo $result[0]["IDH"];?>">
      </div>
    </div>
    <div class="row">
      <div class="col m-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $result[0]["id"];?>">
  </form>

  <a href="detalhe.php?id=<?php echo $id;?>">Voltar</a>

</div>

<br><b>
</body>
</html>

