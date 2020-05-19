<?php
$con = mysqli_connect("localhost", "root","Uscs94066819", "lp1");

if (mysqli_connect_errno($con)){
    echo "Erro: ".mysqli_connect_error();

}
else {
    $sql = "SELECT  Nome, Sobrenome FROM Pessoa ";
    $resultado = mysqli_query ($con, $sql);

    echo "<h2> Pessoas </h2>";

    while ($pessoa = mysqli_fetch_array($resultado)) {

        echo $pessoa ['Nome']." ".$pessoa ['Sobrenome']."<br>";
    }
    mysqli_close($con);
}
?>