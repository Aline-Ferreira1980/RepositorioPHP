<?php
$con = mysqli_connect ("localhost", "root", "U9");
$sql = "DROP DATABASE lp1";
if (mysqli_query($con, $sql)){
    echo "Base de dados removida com sucesso!!!";
}
else {
    echo "Erro!!! ".mysqli_error($con);
}
mysqli_close($con);
?>