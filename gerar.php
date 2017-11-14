<?php

    $linhas = @$_GET["linhas"];
    $colunas = @$_GET["colunas"];


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
<body>
    <script type="text/javascript">
        var linhas = <?php echo $linhas; ?>;
        var colunas = <?php echo $colunas; ?>;
        
        function somar(index)
        {
            var k = 0;
            var total = parseInt(0);
            while(k < linhas)
            {
                var nome = "l"+k+"c"+index;
                var numero = 0;
                if(document.getElementById(nome).value == "")
                {
                    numero = 0;
                }
                else
                {
                    numero = parseInt(document.getElementById(nome).value);
                }
                total += numero;
                k++;
            }
            document.getElementById("resultado"+index).value = total;
            var i = 0;
            while(i < linhas)
            {
                
                
                i++;
            }
        }

        function xifi(l)
        {
            var id1 = "l"+l+"c0";
            var id2 = "l"+l+"c1";
            var resultadoid = "l"+l+"c2";
            var xi = document.getElementById(id1).value;
            var fi = document.getElementById(id2).value;
            var res = "";
            if(xi == "" || fi == "")
            {

            }
            else
            {
                res = parseFloat(xi) * parseFloat(fi);
            }
            var i = 0;
            
            document.getElementById(resultadoid).value = res;
        }
        function xifi2(l)
        {
            var id1 = "l"+l+"c0";
            var id2 = "l"+l+"c1";
            var resultadoid = "l"+l+"c3";
            var xi = document.getElementById(id1).value;
            var fi = document.getElementById(id2).value;
            var res = "";
            if(xi == "" || fi == "")
            {

            }
            else
            {
                res = (parseFloat(xi) * parseFloat(xi)) * parseFloat(fi);
            }
            
            document.getElementById(resultadoid).value = res;
        }
    </script>
    <center>
        <form action="calcular.php" method="GET">
            <input type="hidden" name="colunas" value="<?php echo $colunas; ?>">
            <input type="hidden" name="linhas" value="<?php echo $linhas; ?>">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-responsive table-bordered">
                    <?php
                        require_once("functions.php");
                        require_once("tabelas.php");
                        $i = 0;
                        tabela_agrupados($linhas);
                        
                        /*
                        while($i < $colunas)
                        {
                            if($i > 1)
                            {
                                echo "<th>
                                    <input type=\"hidden\" class=\"form-control text-center\" size=\"5\" name=\"coluna$i\">";
                                    echo opcoes();
                                echo "</th>\n";
                            }
                            else
                            {
                                echo "<th><input type=\"text\" class=\"form-control text-center\" size=\"5\" name=\"coluna$i\"></th>\n";
                            }
                            $i++;
                        }
                        
                        $i = 0;
                        while($i < $linhas)
                        {
                            echo "<tr>";
                            $k = 0;
                            while($k < $colunas)
                            {
                                $varname = "l$i";
                                $varname .= "c$k";
                                if($k > 1)
                                {
                                    echo "<td><input type=\"text\" class=\"form-control text-center\" size=\"2\" onkeyup=\"somar($k);\" name=\"$varname\" id=\"$varname\" placeholder=\"\"></td>\n";
                                }
                                else
                                {
                                    echo "<td><input type=\"text\" class=\"form-control text-center\" size=\"2\" onkeyup=\"somar($k);\" name=\"$varname\" id=\"$varname\" placeholder=\"\" enable=\"true\"></td>\n";
                                }
                                
                                $k++;
                            }
                            echo "</tr>";
                            $i++;
                        }
                        
                        $i = 0;
                        echo "<tr>";
                        while($i < $colunas)
                        {
                            echo "
                                    <td><input type=\"text\" class=\"form-control text-center\" size=\"2\" name=\"resultado$i\" id=\"resultado$i\" placeholder=\"Resultado$i\"></td>\n
                                    ";
                            $i++;
                        }
                        echo "</tr>"
                        */
                    ?>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-success form-control">CALCULAR</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </center>
</body>
</html>