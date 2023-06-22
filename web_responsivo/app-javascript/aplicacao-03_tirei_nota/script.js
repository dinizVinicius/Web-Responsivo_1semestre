function add(){

    let div = document.getElementById("div");
    let row = document.createElement("div");
    
    var nota = document.createElement("INPUT");
    nota.setAttribute("type", "number");
    nota.setAttribute("placeHolder", "Nota [0-10]");
    nota.setAttribute("class", "nota");
    nota.setAttribute("min", 0);
    nota.setAttribute("max", 10);

    var peso = document.createElement("INPUT");
    peso.setAttribute("type", "number");
    peso.setAttribute("placeHolder", "Peso [0-1]");
    peso.setAttribute("class", "peso");
    peso.setAttribute("min", 0);
    peso.setAttribute("max", 1);

    var notapesada = document.createElement("INPUT");
    notapesada.setAttribute("type", "number");
    notapesada.setAttribute("placeHolder", "Peso aplicado");
    notapesada.setAttribute("class", "notapesada");
    notapesada.setAttribute("readonly", true);

    var br = document.createElement("BR");
    
    row.append(nota);
    row.append(peso);
    row.append(notapesada);
    div.append(row);
    div.append(br);
}

function calcular(){
    var index;

    notas = document.getElementsByClassName('nota');
    pesos = document.getElementsByClassName('peso');
    notaspesadas = document.getElementsByClassName('notapesada');
    for (index = 0; index < notas.length; ++index) {
        notaspesadas[index].value = notas[index].value * pesos[index].value;
    }
    
    let notafinal = 0;
    for (index = 0; index < notaspesadas.length; ++index) {
        notafinal += parseFloat(notaspesadas[index].value);
    }
    document.getElementById("nf").value = notafinal;

    freq = parseFloat(document.getElementById("freq").value);
    nf = parseFloat(document.getElementById("nf").value);
    if(isNaN(freq) || isNaN(nf)) {
        document.getElementById("result").innerHTML = "<b>Preencha todos os campos</b>";
    } else if(freq<75){
        document.getElementById("result").innerHTML = "<b>Reprovou por falta</b>";
    } else if(nf<6){
        document.getElementById("result").innerHTML = "<b>Reprovou por nota</b>";
    }
    else {
        document.getElementById("result").innerHTML = "<b>Aprovado</b>";
    }
    
}