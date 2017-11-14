<?php

    function tabela_agrupados($linhas)
    {
        
        echo "<tr><th class=\"text-center\">Xi</th>
                <th class=\"text-center\">Fi</th>
                <th class=\"text-center\">Xi * Fi</th>
                <th class=\"text-center\">Xi² * Fi</th></tr>";
        $i = 0;
        while($i < $linhas)
        {
            $k = 0;
            echo "<tr>";
            while($k < 4)
            {
                $varname = "l$i";
                $varname .= "c$k";
                if($k < 2)
                {
                    echo "<td><input type=\"text\" class=\"form-control text-center\" size=\"2\" onkeyup=\"xifi($i);xifi2($i);\" name=\"$varname\" id=\"$varname\" placeholder=\"$varname\" enable=\"true\"></td>\n";
                }
                else 
                {
                    echo "<td><input type=\"text\" class=\"form-control text-center\" size=\"2\" onkeyup=\"xifi($i);xifi2($i);\" name=\"$varname\" id=\"$varname\" placeholder=\"$varname\" enable=\"true\" disabled></td>\n";
                }
                $k++;
            }
            echo "</tr>";
            $i++;
        }
    }

?>