<?php
    include "conexao.php";

    $nomefilme = addslashes($_POST["nome"]);
    $descricaofilme = addslashes($_POST["descricao"]);
    $lancamento = addslashes($_POST["lancamento"]);    
    
    $volta = "<script>javascript:history.back(-2)</script>";
    
    if($nomefilme == "" || $descricaofilme == "" || $lancamento == "")
    {
        echo "<script>alert(\"Informe todos os campos\");</script>";
        echo $volta; 
        return;
    }
    
    $sql="INSERT INTO filme(nomefilme, descricaofilme, lancamento) VALUES ('$nomefilme', '$descricaofilme', '$lancamento');";
    $result = mysql_query($sql);
   
    if ($result!=0)
    {
        echo  "<script>alert(\"".mysql_affected_rows(). " Filme cadastrado com sucesso!\");</script>";
        echo $volta; 
    }
    else 
    {
        echo  "<script>alert(\"".  mysql_error()."\");</script>";
        echo $volta; 
    }        
?>