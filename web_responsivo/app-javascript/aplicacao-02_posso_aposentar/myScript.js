function calcular(){

    let idade = document.getElementById('idade').value;
    idade = parseInt(idade);

    let contrib = document.getElementById('contrib').value;
    contrib = parseInt(contrib);

    let masculino = document.getElementById('masculino').checked;
    let feminino = document.getElementById('feminino').checked;

    
    if( isNaN(idade) || isNaN(contrib) ){
        erro = "";
        if(isNaN(idade)){
            erro += "<br><b><i>Digite um valor válido para idade!</i></b>";
        }
        if(isNaN(contrib)){
            erro += "<br><b><i>Digite um valor válido para tempo de contribuição!</i></b>";
        }
        document.getElementById('demo').innerHTML = erro;
     }else{
        
        // Homens: 62 anos de idade e 35 anos de contribuição
        // Mulheres: 57 anos de idade e 30 anos de contribuição
        if(  (masculino && idade >= 62 && contrib >= 35)  ||  (feminino && idade >= 57 && contrib >= 30)  ) {
            document.getElementById('demo').innerHTML = "<br><br><b>Parabéns! Você já pode se aposentar.</b><br><br><br>";
        } else {
            document.getElementById('demo').innerHTML = "<br><br><b>Você ainda não pode se aposentar.</b><br><br><br>";
        }
        
     }
}

function limpar(){
    document.getElementById('idade').value = "";
    document.getElementById('contrib').value = "";
    document.getElementById('demo').innerHTML = "";
}