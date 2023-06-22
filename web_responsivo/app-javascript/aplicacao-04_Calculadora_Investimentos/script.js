

function calcular(){
    
    C = parseFloat(document.getElementById('C').value);
    t = parseFloat(document.getElementById('t').value);
    i = parseFloat(document.getElementById('i').value);
    M = C * Math.pow(1+i,t);
    lucro = M - C;
    
    result = "";
    result += "<b>";
    if(isNaN(M)||isNaN(lucro)){
        result += "<br>Erro!!!";
    } else {
        result += "<br>Montante = $" + M.toFixed(2);
        result += "<br>Lucro = $" + lucro.toFixed(2);   
    }
    result += "</b>";
    document.getElementById("result").innerHTML = result;
    
}