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
                    <form name="frmCliente" action="php/incluirCliente.php" method="post" id="formulario">
                        <center>
                            <table>
                                <tr><td colspan="2" class="titulo">Cadastro de Cliente</p></td></tr>
                                <tr><td class="right">Nome:</td><td class="left"><input type="text" name="nome" maxlength="40" /></td></tr>
                                <tr><td class="right">E-Mail:</td><td class="left"><input type="text" name="email" maxlength="40" /></td></tr>
                                <tr><td class="right">Telefone:</td><td class="left"><input type="text" name="telefone" maxlength="40" /></td></tr>
                                <tr><td class="center" colspan="2"><input type="submit" value="Enviar"><input type="reset" value="Limpar"></td></tr>
                            </table>
                        </center>
                    </form>
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
