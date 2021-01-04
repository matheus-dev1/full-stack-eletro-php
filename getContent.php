<?php
$servername = "localhost";
$username = "Teste";
$userpassword = "";
$database = "fullstackeletro";

$tabela = $_GET['table'];

$conection = mysqli_connect($servername, $username, $userpassword, $database);

if ($conection == false)
    {
        die("A conexao falhou " . mysqli_connect_error());
    }
else{
    setlocale(LC_MONETARY, 'pt-br');

    $sqlQuerySelect = "SELECT * FROM $tabela";
    $sqlQuerySelectResult = $conection->query($sqlQuerySelect);
    print_r(json_encode($sqlQuerySelectResult->fetch_all(MYSQLI_ASSOC)));

    mysqli_close($conection);
}
?>