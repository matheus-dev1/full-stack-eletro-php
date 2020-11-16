<?php include_once('conexao.php');?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Full Stack Eletro - Nossos Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
<?php include_once('menu.html');?>

    <br><br><br><br><br>
    <!--Com o atalho CTRL + D nos selecionamos todos os itmens iguais-->
    
    <div class="container-fluid">
        <div class="row continaer-fluid">
            <div class="col-3 d-block">
            <h3>Categoria de Produtos</h3>
                <!--A tag section vai criar um secao sobre alguma coisa.-->
                <ul>
                    <li onclick="exibirTodosProdutos()">Todos os Produtos (12)</li>
                    <li onclick="exibirProdutos('geladeira')" >Geladeiras (3)</li>
                    <li onclick="exibirProdutos('fogao')" >Fogoes (2)</li>
                    <li onclick="exibirProdutos('microondas')" >Microondas (3)</li>
                    <li onclick="exibirProdutos('lavaroupas')" >Lava Roupas (3)</li>
                    <li onclick="exibirProdutos('lavaloucas')" >Lava-Loucas (1)</li>
                </ul>
            </div>
            <div class="col-9 d-inline-block justify-content-sm-center">
                <?php
                    $sqlQuerySelect = "SELECT * FROM PRODUTOS";
                    $sqlQuerySelectResult = $conection -> query($sqlQuerySelect);
                    if ($sqlQuerySelectResult -> num_rows > 0 ) {
                    #Verifico se as linhas nao estao vazias ou seja maior que zero.
                    while ($rowInfo = $sqlQuerySelectResult -> fetch_assoc()) {
                ?>
                <!--A tag artigo signifca a parte do conetudo de uma categoria-->
                <div class="ml-5 div_produtos" id="<?php echo $rowInfo['categoria'];?>">
                    <img onclick="zoom(this)" src=" <?php echo $rowInfo['imagem'];?> " alt="<?php echo $rowInfo['descricao'];?>" width="150px">
                    <!--Quando passamos o parametro "this" a funcao nos estamos querendo dizer que tudo o que ocorrer ao clicar no botao sera refetente
                    toda essa tag img-->
                    <p> <?php echo $rowInfo['descricao'];?> </p>
                    <hr>
                    <p>De: <strike>R$ <?php echo $rowInfo['preco'];?> </strike></p>
                    <p class="menor_preco">Por: R$ <?php echo $rowInfo['precofinal'];?> </p>
                </div>
        <?php
            }
        }
        else {
            echo "Nenhum produto cadastrado!";
        }
        mysqli_close($conection);
        ?>
            </div>
        </div>
    </div>
    
    </main>
    <footer class="recode">
        <br><hr><br>
        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        <br>
        <img src="./imgs/formas_pagamento.jpeg" alt="Formas de Pagamento" width="25%" height="25%">
        <br><br><hr><br>
        <p>&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>
    </footer>

    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>