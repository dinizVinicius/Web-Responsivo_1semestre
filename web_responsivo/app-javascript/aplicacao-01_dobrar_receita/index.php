<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dobrar Receita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="myScript.js"></script>
    <link href="estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include ("../../menu.php"); ?>
        <div class="div_no_centro">
            <div class="main p-5 mt-3 w3-container w3-border w3-round-xlarge">

    <h2>Bolo de Fubá</h2>

    <ul>    
        <li>3 ovos inteiros</li>
        <li>2 xícaras (chá) de açúcar</li>
        <li>2 xícaras (chá) de fubá</li>
        <li>3 colheres (sopa) de farinha de trigo</li>
        <li>1/2 copo (americano) de óleo</li>
        <li>1 copo (americano) de leite</li>
        <li>1 colher (sopa) de fermento em pó</li>
    </ul>

    <hr>

    <h3>Multiplicar receita</h3>
    <form>    
        <label for="num1" class="m-1">Multiplicar ingredientes por:</label>
        <input type="number" id="num" name="num" required class="m-1">
        <button type="button" onclick="calcular()" class="btn btn-primary m-1"> Calcular</button>
        <button type="button" onclick="limpar()" class="btn btn-secondary m-1"> Limpar</button>
    </form>

    <div id="demo"></div>

    <a href="../index.php">Voltar</a>

    </div></div>


</body>
</html> 
