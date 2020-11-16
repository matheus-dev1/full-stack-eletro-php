<?php include_once('conexao.php');?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Full Stack Eletro - Nossas Lojas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include_once('menu.html');?>

    <br><br>

    <main id="main_index container-fluid">
        <div class="container text-center mt-5">
            <div class="lojas">
                <p><b>Rio de Janeiro</b></p>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10 &ordm; Andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
                <!--class="line_separation"-->
            </div>
            <div class="lojas">
                <p><b>Sao Paulo</b></p>
                <p>Avenida Paulista, 985</p>
                <p>3 &ordm; Andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
            </div>
            <div class="lojas">
                <p><b>Santa Catarina</b></p>
                <p>Rua Major Avila, 370</p>
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
            </div>
        </div>
    </main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="recode">
        <hr><br>
        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        <br>
        <img src="./imgs/formas_pagamento.jpeg" alt="Formas de Pagamento" width="25%" height="25%">
        <br><br><hr><br>
        <p>&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>