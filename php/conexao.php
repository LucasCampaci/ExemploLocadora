<?php
    $conexao = mysql_connect("localhost","root","toor");
    mysql_select_db("locadora");

    if (!$conexao)
    {
        echo 'Servidor não encontrado';
        exit;
    };
?>