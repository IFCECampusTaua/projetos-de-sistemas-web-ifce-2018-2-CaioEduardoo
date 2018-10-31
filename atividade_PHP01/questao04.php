<?php
$string=$_POST["string"];
$busca=$_POST["busca"];
 echo "string:".$string;
 echo "<br>";
 echo "caracter de busca:".$busca;
 echo "<br>";
 $tamanhostring=strlen($string);
 echo "Numero total de caracteres:".$tamanhostring;
 echo "<br>";
$cont=0;
for ($i=0; $i < $tamanhostring; $i++) { 
	$partest=substr($string,$i,1);
	if ($partest==$busca) {
		$cont=$cont+1;
	}
}
echo "Numero de caracteres iguais ao buscador:".$cont;
?>