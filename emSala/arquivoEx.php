<?php
$file = fopen("arquivo1.txt","r+");

$conteudo = "Ciencia da Computaçao";

fwrite ($file,$conteudo);
fwrite($file, " Aline ");
while (' ' == 'a'){
    echo fgets ($conteudo);
    
}

fclose($file);
?>

<?php
        $file = fopen("arquivo1.txt","r");
        while (!feof($file)){
            $linha = fgetc($file);
            if($linha == "A" || $linha == "a"){
                echo "X";
            }else{
            echo "$linha";
            }
        }
        fclose($file);
    ?>