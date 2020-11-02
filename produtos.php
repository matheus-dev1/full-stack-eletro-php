<?php include_once('conexao.php');?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Full Stack Eletro - Nossos Produtos</title>
</head>
<body>
    
<?php include_once('menu.html');?>

    <br><br><br><br><br>
    <!--Com o atalho CTRL + D nos selecionamos todos os itmens iguais-->
    
    <header>
        <aside>
            <!--A tag aside mostra um exemplo de menu lateral-->
            <div class="categorias">
                <section><h3>Categoria de Produtos</h3></section>
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
        </aside>
    </header>    

    <main class="espaco_produtos">
    <?php
        $sqlQuerySelect = "SELECT * FROM PRODUTOS";
        $sqlQuerySelectResult = $conection -> query($sqlQuerySelect);
        if ($sqlQuerySelectResult -> num_rows > 0 )
        {
            while ($rowInfo = $sqlQuerySelectResult -> fetch_assoc())
            {
    ?>
        
                <!--A tag artigo signifca a parte do conetudo de uma categoria-->
                <div class="div_produtos" id="<?php echo $rowInfo['categoria'];?>">
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
        else
        {
            echo "Nenhum produto cadastrado!";
        }
    ?>
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
</body>
</html>