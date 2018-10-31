<?php
$altura=$_POST["altura"];
$sexo=$_POST["sexo"];
$pesoidealmasc;
$pesoidealfemi;
echo "Peso:" .$altura;
echo "<br>";
echo "Sexo:" .$sexo;
if ($sexo=='masculino') {
	echo "<br>";
	$pesoidealmasc=(72.7*$altura)-58;
	echo "Peso Ideal:".$pesoidealmasc;
}elseif ($sexo=='feminino') {
	echo "<br>";
	$pesoidealfemi=(62.1*$altura)-44.7;
	echo "Peso Ideal:".$pesoidealfemi;
}
?>