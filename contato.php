<?php include_once('conexao.php');?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Full Stack Eletro - Entre em Contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
        include_once('menu.html');
        #O include, caso de um erro ele simplesmente me exibe uma mensagem de erro, mas nao para o funcionamneto
        #do programa.
        #Posso usar o inclie_once() que faz apenas um inclusao deste arquivo no programa e apenas uma.
        #Obs: Nos podemos colocar este include em varios pontos do nosso programa.
        //require("menu.html");
        #No caso do require() se ele falhar toda a aplicacao ira falhar.
        #Tambem tem o requise_once() e ele trabalha em conjunto com o include_once() ou seja se tiver um
        #include_once() e depois um require_once apenas o include_once ira ser exibido.
    ?>

    <br><br><br><br>

<header class="container" id="contatos">
    <h3>Contatos</h3>
    <br><br>
    <div>
        <img src="./imgs/email_icon.png" alt="Icone do Email" width="50" height="50">
        <p>fullstack@eletro.com&nbsp;</p>
    </div>
    <div class="line_separation">
        <img src="./imgs/whatsapp_icon.png" alt="Icone do Whatsapp" width="50" height="50">
        <p>(11) 11111-1111</p>
    </div>
</header>

    <hr><br>
    
<form class="container" action="" name="mensagem" method="POST">
    <div class="form-group">
        <label for="nome">Nome: </label>
        <input class="espaco_interno form-control" aria-describedby="nameHelp" type="text" name="nome" id="nome" value="" placeholder="Digite o seu nome">
    </div>

    <div class="form-group">
        <label for="email">Endereco de E-mail: </label>
        <input class="espaco_interno form-control" type="email" name="email" id="email" value="" placeholder="Digite o seu e-mail">
    </div>

    <div class="form-group">
        <label for="select">Assunto: </label>
        <select class="espaco_interno form-control" name="assunto" id="assunto">
            <option value="relamacao">Relamacao</option>
            <option value="elogio">Elogio</option>
            <option value="duvida">Duvida</option>
            <option value="profissional">Contato Profissional</option>
        </select>
    </div>

    <div class="form-group">
        <label for="mensagem">Mensagem: </label>
        <textarea class="espaco_interno form-control" name="mensagem" id="mensagem" value="" cols="30" rows="5" placeholder="Digite uma mensagem"></textarea>
    </div>

    <button class="btn btn-primary espaco_interno form-control" type="submit" name="submit">Enviar</button>

    <br><br>

    </form>

<?php 
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $SQLQueryInsert = "INSERT INTO MENSAGEM (NOME, EMAIL, ASSUNTO, MENSAGEM)
        VALUES ('$nome', '$email', '$assunto', '$mensagem')";

        $SQLQuerySelectResult = $conection -> query($SQLQueryInsert);

        if ($SQLQuerySelectResult == true)
        {
            echo "<br/ > Dados inseridos com sucesso! <br /> <hr />";
        }
        else
        {
            echo "<br/ > Dados nao inseridos com sucesso! <br /> <hr />";
        }
    }
?>

<?php
    $SQLQuerySelect = "SELECT * FROM MENSAGEM";
    $SQLQuerySelectResult = $conection -> query($SQLQuerySelect);
    if ($SQLQuerySelectResult -> num_rows > 0 )
    {
        while ($rowInfo = $SQLQuerySelectResult -> fetch_assoc())
        {
?>

<div class="container text-center">
    <?php
    echo "Data: " . $rowInfo['data_post'] . "<br />";
    echo "Nome: " . $rowInfo['nome'] . "<br />";
    echo "E-mail: " . $rowInfo['email'] . "<br />";
    echo "Mensagem: " . $rowInfo['mensagem'] . "<br />";
    echo "<br /> <hr />";
    ?>
</div>

<?php
        }
    }
    else
    {
        echo "Nenhum produto cadastrado!";
    }
    ?>

    <footer class="recode">
        <hr><br>
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