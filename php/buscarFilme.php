<?php
    include "conexao.php";
    
   $sql = "SELECT * FROM filme";
   $result = mysql_query($sql);
   
   if ($result!=0)
    {
       echo '<center>';
       echo '<table>';
       echo  '<tr class="title"><td colspan="4">Filmes</td></tr>';
       echo '<tr class="cols"><td>ID</td><td>Nome</td><td>Gênero</td><td>Lançamento</td></tr>';
       
       $linhaFilme = 0;
       while ($row = mysql_fetch_array($result)) 
       {
           if($linhaFilme %2 == 0)
           {
               echo "<tr class=\"alt\">";
           }
           else 
           { 
               echo "<tr>";
           }
            echo '<td width=\'30\'>'.$row['idfilme'].'</td>';
            echo '<td width=\'200\'>'.$row['nomefilme'].'</td>';
            echo '<td width=\'100\'>'.$row['genero'].'</td>';
            echo '<td width=\'100\'>'.$row['lancamento'].'</td></tr>';
            $linhaFilme++;
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