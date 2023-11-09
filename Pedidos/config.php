<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','pedidos');

    $conn = new MySQLi(HOST,USER,PASS,BASE);
?>
