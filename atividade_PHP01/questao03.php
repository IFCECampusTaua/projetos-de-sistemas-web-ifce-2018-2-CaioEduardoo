<?php
$nome01=$_POST["nome01"];
$nome02=$_POST["nome02"];

echo "Nome01:".$nome01;
echo "<br>";
echo "Nome02:".$nome02;
echo "<br>";
if ($nome01==$nome02) {
	echo "Igual";
}elseif ($nome01!=$nome02) {
	echo "Diferente";
}
?>