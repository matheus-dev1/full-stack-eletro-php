<?php include_once('conexao.php');?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Full Stack Eletro - Nossas Lojas</title>
</head>
<body>
<?php include_once('menu.html');?>

    <br><br><br><br><br>

    <main id="main_index">
        <div class="lojas">
            <p><b>Rio de Janeiro</b></p>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; Andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
            <!--class="line_separation"-->
        </div>
        <div class="lojas line_separation">
            <p><b>Sao Paulo</b></p>
            <p>Avenida Paulista, 985</p>
            <p>3 &ordm; Andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
        </div>
        <div class="lojas line_separation">
            <p><b>Santa Catarina</b></p>
            <p>Rua Major Avila, 370</p>
            <p>Vila Mariana</p>
            <p>(47) 5555-5555</p>
        </div>
    </main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="recode">
        <hr><br>
        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        <br>
        <img src="./imgs/formas_pagamento.jpeg" alt="Formas de Pagamento" width="25%" height="25%">
        <br><br><hr><br>
        <p>&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>
    </footer>
</body>
</html>