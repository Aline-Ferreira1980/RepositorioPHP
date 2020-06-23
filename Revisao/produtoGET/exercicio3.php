<html>
<?php
$num = $_GET["numero"];

for ($i=0; $i<=$num; $i++){
if ($i%2 == 0)
    echo $i."<br>";
}
?>
</html>