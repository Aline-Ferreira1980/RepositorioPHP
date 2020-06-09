<?php


function FatorialAnterior ($n )
if ($n<2){
    return 1;
}else{ 
    return ($n-1)*FatorialAnterior($n-1);
}
?>
echo FatorialAnterior(5);