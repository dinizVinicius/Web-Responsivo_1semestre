function calcular(){

    let num = document.getElementById('num').value;
    num = parseInt(num);

    if(isNaN(num)){
        document.getElementById('demo').innerHTML = "<b><i>Digite um valor válido!</i></b>";
     }else{
        let ovos = 3 * num;
        let acucar = 2 * num;
        let fuba = 2 * num;
        let trigo = 3 * num;
        let oleo = 0.5 * num;
        let leite = 1 * num;
        let fermento = 1 * num;

        let HTML = "<h5>Receita multiplicada por " + num + ":</h5>";
        HTML += "<ul>";
        HTML += "<li>" + ovos + " ovos inteiros</li>";
        HTML += "<li>" + acucar + " xícaras (chá) de açúcar</li>";
        HTML += "<li>" + fuba + " xícaras (chá) de fubá</li>";
        HTML += "<li>" + trigo + " colheres (sopa) de farinha de trigo</li>";
        HTML += "<li>" + oleo + " copo (americano) de óleo</li>";
        HTML += "<li>" + leite + " copo (americano) de leite</li>";
        HTML += "<li>" + fermento + " colher (sopa) de fermento em pó</li>";
        HTML += "</ul>";

        document.getElementById('demo').innerHTML =HTML;
     }
}

function limpar(){
    document.getElementById('num').value = "";
    document.getElementById('demo').innerHTML = "";
}