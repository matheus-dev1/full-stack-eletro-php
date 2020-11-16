<?php
$servername = "localhost";
$username = "Teste";
$userpassword = "";
$database = "fullstackeletro";

$conection = mysqli_connect($servername, $username, $userpassword, $database);

if ($conection == false)
    {
        die("A conexao falhou " . mysqli_connect_error());
    }
?>