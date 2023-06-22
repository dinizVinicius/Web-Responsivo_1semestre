<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistemas Web Responsivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php include("../menu.php"); ?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Banco de Dados - Tela de cadastro</h1>
  <h2>Cadastro da Países</h2>
  <p>Responsividade com Bootstrap e Media Queries</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Cadastrar</h1>
  <p>Aqui temos 3 níveis de responsividade:</p>
  <ul>
  <li>Em telas maiores, os campos são apresentados em 2 colunas.</li>
  <li>Em telas menores, aparece apenas 1 coluna de campos.</li>
  <li>Em telas menores de 600px, Media Query é usado para ocultar os <i>labels</i></li>
  </ul>
  <form name="myForm" action="action_page.php" onsubmit="return validateForm()" method="post">
    <div class="row">
      <div class="col-md-6 mt-1">
        <label for="col-01">Nome Países:</label>
        <input type="text" class="form-control" id="col-01" placeholder="Nome País" name="col-01">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-02">Capital:</label>
        <input type="text" class="form-control" id="col-02" placeholder="Capital" name="col-02">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-03">Idioma:</label>
        <input type="text" class="form-control" id="col-03" placeholder="Idioma" name="col-03">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-04">Continente:</label>
        <input type="text" class="form-control" id="col-04" placeholder="Continente" name="col-04">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-05">População:</label>
        <input type="text" class="form-control" id="col-05" placeholder="População" name="col-05">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-06 mt-1">Lider Político:</label>
        <input type="text" class="form-control" id="col-06" placeholder="Lider Político" name="col-06">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-07">Religião Dominante:</label>
        <input type="text" class="form-control" id="col-07" placeholder="Religião Dominante" name="col-07">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-08">PIB:</label>
        <input type="text" class="form-control" id="col-08" placeholder="PIB" name="col-08">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-09">IDH:</label>
        <input type="text" class="form-control" id="col-09" placeholder="IDH" name="col-09">
      </div>
    </div>
    <div class="row">
      <div class="col m-3">
        <button type="submit" class="btn btn-primary">INSERIR</button>
      </div>
    </div>
  </form>
</div>

<br><b>
</body>
</html>

