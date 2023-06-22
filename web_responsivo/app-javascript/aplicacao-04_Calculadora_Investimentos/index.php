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

    <div class="div_no_centro">
    <div class="main p-3 m-2 w3-container w3-border w3-round-xlarge text-center ">


    <h2>Calculadora de Investimentos</h2>
    <br>    
    <input type="number" id="C" placeholder="Capital Inicial">
    <br><br>
    <input type="number" id="i" placeholder="Taxa de Juros">
    <br><br>
    <input type="number" id="t" placeholder="Tempo aplicado">
    <br><br>
    <input type="button" class="btn btn-primary" value="Calcular" onclick="calcular()">
    <div id="result"></div>
    <br><br>
    <a href="../index.php">Voltar</a>

</div>
</div>
    
</body>
</html>