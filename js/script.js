/*document.getElementsByTagName("img")[1].src = "./imgs/test.png"
console.log(document.getElementsByTagName("img")[1].src)
document.getElementsByTagName("div")[3].style = "color: purple"
document.getElementsByTagName("p")[21].style = "color:  blue"
document.getElementsByClassName("menor_preco")[1].style = "color:  brown"*/

function exibirProdutos (produto) {
    let produtos = document.getElementsByClassName("div_produtos")
    console.log(produtos)
    for (let indice = 0; indice < produtos.length; indice++){
        if (produtos[indice].id == produto){
            console.log(produtos[indice].id)
            console.log(produto)
            produtos[indice].style = "display: inline-block";
            /*Caso o item em que nos clicamos seja igual ao indice do produto do array obtido atraves das classes entao ele tera a propriedade display
            inline-block fazendo com que os produtos do mesmo tipo fiquem um do lado do outro.*/
        }
        else{
            produtos[indice].style = "display: none";
            /*Caso o item nao seja igual ao produto do "click" entao ele ficara oculto*/
        }
    }
}

let exibirTodosProdutos = () => {
    let produtos = document.getElementsByClassName("div_produtos")
    console.log(produtos)
    /*Aqui na linha de cima estamos pegando um array de todos as classes "div_produtos"*/
    for (let indice = 0; indice < produtos.length; indice++){
        /*Aqui vamos pasar um por um*/
        produtos[indice].style = "display: inline-block";
        /*Aqui vamos garantir que ela tenha o display necessario para que fiquem uma do lado da outra*/
    }
}

let zoom = (img) => {
    if (img.width == 150 || img.width == 75){
        img.width = 300;
    }else{
        img.width = 150;
    }
}

let zoom2 = (img) => {
    if (img.width == 50){
        img.width = 100;
    }else{
        img.width = 50;
    }
}