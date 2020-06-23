<html>
<?php
$a = $_GET["param1"];
$b = $_GET["param2"];

if ($a>$b)
echo "$a é maior que $b";
else if($a == $b)
echo "$a é igual a $b";
else
echo "$a é menor que $b";

?>
</html>