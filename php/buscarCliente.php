<?php
    include "conexao.php";
    
   $sql = "SELECT * FROM cliente";
   $result = mysql_query($sql);
   
   if ($result!=0)
    {
       echo '<center>';
       echo '<table border=\'1\'>';
       echo  '<tr class="title"><td colspan="4">Clientes</td></tr>';
       echo '<tr class="cols"><td>ID</td><td>Nome</td><td>Email</td><td>Telefone</td></tr>';
       
       $linhaCliente = 0;
       while ($row = mysql_fetch_array($result)) 
       {
           if($linhaCliente %2 == 0)
           {
               echo "<tr class=\"alt\">";
           }
           else 
           { 
               echo "<tr>";
           }
            echo '<td width=\'30\'>'.$row['idcliente'].'</td>';
            echo '<td width=\'200\'>'.$row['nomecliente'].'</td>';
            echo '<td width=\'100\'>'.$row['emailcliente'].'</td>';
            echo '<td width=\'100\'>'.$row['telefonecliente'].'</td></tr>';
            $linhaCliente++;
           }
       echo '</table>';
       echo '</center>';
    }
    else 
    {
        echo 'A tabela de clientes esta vazia'; 
        exit;
    }     
?>