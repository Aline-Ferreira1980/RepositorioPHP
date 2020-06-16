<?php
        $contador = -1;
        $file = fopen("arquivo1.txt","r");
        while (!feof($file)){
            $linha = fgetc($file);
            
            if ($linha == "A" || $linha == "a")
            $contador++;
     
    }
        echo $contador;
        fclose($file);
    ?>
   