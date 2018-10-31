<?php
$nota01=$_POST["nota01"];
$nota02=$_POST["nota02"];
$nota03=$_POST["nota03"];
$nota04=$_POST["nota04"];

echo "Nota 01:".$nota01;
echo "<br>";
echo "Nota 02:".$nota02;
echo "<br>";
echo "Nota 03:".$nota03;
echo "<br>";
echo "Nota 04:".$nota04;
echo "<br>";
$media=($nota01+$nota02+$nota03+$nota04)/4;
echo "Media:".$media;
echo "<br>";

if ($media>=7) {
	echo "Aprovado";
}elseif ($media<7) {
	echo "Reprovado";
}
?>