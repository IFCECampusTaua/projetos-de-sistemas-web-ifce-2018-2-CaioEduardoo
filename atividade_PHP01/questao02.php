<?php
$numero=$_POST["numero"];
echo "Numero digitado:".$numero;
echo "<br>";
for ($i=1; $numero>1 ; $numero=$numero-1) { 
  $i=$i*$numero;
 }
  echo "valor:".$i;
?>