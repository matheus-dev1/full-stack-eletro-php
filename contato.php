<?php include_once('conexao.php');?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang=pt-br>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Full Stack Eletro - Entre em Contato</title>
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

<header id="contatos">
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
    
<main>
    <form action="" name="mensagem" method="POST">
        <div>
            <label for="nome">Nome: </label>
            <input class="espaco_interno" type="text" name="nome" id="nome" value="" placeholder="Digite o seu nome">
        </div>

        <br><br>

        <div>
            <label for="email">E-mail: </label>
            <input class="espaco_interno" type="email" name="email" id="email" value="" placeholder="Digite o seu e-mail">
        </div>

        <br><br>

        <div>
            <label for="select">Assunto: </label>
            <select class="espaco_interno" name="assunto" id="assunto">
            <option value="relamacao">Relamacao</option>
            <option value="elogio">Elogio</option>
            <option value="duvida">Duvida</option>
            <option value="profissional">Contato Profissional</option>
            </select>
        </div>

        <br><br>

        <div>
            <label for="mensagem">Mensagem: </label><br>
            <textarea class="espaco_interno" name="mensagem" id="mensagem" value="" cols="30" rows="5" placeholder="Digite uma mensagem"></textarea>
        </div>

        <br><br>

        <div>
            <button class="espaco_interno" type="submit" name="submit">Enviar</button>
        </div>

        <br><br><hr>
    </form>
</main>

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
            echo "Data: " . $rowInfo['data_post'] . "<br />";
            echo "Nome: " . $rowInfo['nome'] . "<br />";
            echo "E-mail: " . $rowInfo['email'] . "<br />";
            echo "Mensagem: " . $rowInfo['mensagem'] . "<br />";
            echo "<br /> <hr /> <br />";
        }
    }
    else
    {
        echo "Nenhum produto cadastrado!";
    }
    ?>

    <br><br><br>

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