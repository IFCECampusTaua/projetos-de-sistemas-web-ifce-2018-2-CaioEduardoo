<?php
$nome=$_POST["nome"];
$email=$_POST["email"];

/*echo "Nome:".$nome;
echo "<br>";
echo "Email:".$email;
echo "<br>";*/

setcookie("nome",$nome,time()+3600);
setcookie("email",$email,time()+3600);

header('Location: mensagem.php');

?>