<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>

<?php include ("../../menu.php"); ?>

<div class="main p-3 m-2 w3-container w3-border w3-round-xlarge">
<div class="div_no_centro">

    <h2>Calcular nota</h2>

    <input type="number" id="freq" placeholder="Frequência [0-100]" min="0" max="100">
    <br><br>
    <input type="number" id="nf" placeholder="Nota Final" readonly>
    <br><br>
    Notas das atividades:<br>
    <div id="div"></div>
    <input type="button" class="btn btn-primary" value="Adicionar atividade" onclick="add()">
    <br><br>
    <input type="button" class="btn btn-primary" value="Calcular" onclick="calcular()">
    <div id="result"></div>
    <br>
    <a href="../index.php">Voltar</a>

</div>
</div>
    
</body>
</html>