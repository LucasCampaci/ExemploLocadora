<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora YAK</title>
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
            <div id="topo">
                <div class="titulo"><?php include "topo.php";?></div>                                
            </div>
            
            <div id="caixa">
                <div id="ctd">
                    <div id="dados">
                        <div id="clientes">
                                <?php include "php/buscarCliente.php";?>
                        </div>
                        <div id="filmes">
                                <?php include "php/buscarFilme.php";?>
                        </div>
                    </div>
                </div>
            </div>        
                    
            <div id="rodape">
                <div id="ctd">
                        <?php include "rodape.php";?>
                </div>
            </div>
        </div>
    </body>
</html>
