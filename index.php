<?php include_once('conexao.php');?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Full Stack Eletro - Pagina Inicial</title>
</head>

<body>
<div class="container-fluid">
    <?php include_once('menu.html'); ?>
    <!--tag <nav> e usada quando precisamos fazer um grupo de links
    Esta e um tag semantica, porque ela faz muito mais sentido eu olhar
    para esta tag e identificar que se trata de uma barra de navegacao.-->

    <br><br>

    <main class="mt-5 text-center">
        <h3 id="red_title">Sejam bem vindos a Full Stack Eletro!</h3>
        <br>
        <p>Nossa loja e especilizada em eletrodomesticos da melhor qualidade, precos acessiveis e diversas formas de pagamento!</p>
    </main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="recode mt-5">
        <hr><br>
        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        <br>
        <img src="./imgs/formas_pagamento.jpeg" alt="Formas de Pagamento" width="25%" height="25%">
        <br><br>
        <hr><br>
        <p>&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
</body>
</html>