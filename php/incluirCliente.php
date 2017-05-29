<?php
    include "conexao.php";

    $nomecliente = addslashes($_POST["nome"]);
    $emailcliente = addslashes($_POST["email"]);
    $telefonecliente = addslashes($_POST["telefone"]);    
    
    $volta = "<script>javascript:history.back(-2)</script>";
    
    if($nomecliente == "" || $emailcliente == "" || $telefonecliente == "")
    {
        echo "<script>alert(\"Informe todos os campos\");</script>";
        echo $volta; 
        return;
    }
    
    $sql="INSERT INTO cliente(nomecliente, emailcliente, telefonecliente) VALUES ('$nomecliente', '$emailcliente', '$telefonecliente');";
    $result = mysql_query($sql);
   
    if ($result!=0)
    {
        echo  "<script>alert(\"".mysql_affected_rows(). " Cliente cadastrado com sucesso!\");</script>";
        echo $volta; 
    }
    else 
    {
        echo  "<script>alert(\"".  mysql_error()."\");</script>";
        echo $volta; 
    }        
?>