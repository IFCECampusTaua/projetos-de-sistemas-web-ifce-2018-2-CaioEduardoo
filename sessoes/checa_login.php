<?php
$login=$_POST["login"];
$senha=$_POST["senha"];
$logou=0;

if ($login=="aula" && $senha=="php") {
	session_start();
	$_SESSION['logou']=1;
	header('Location: home.php');

}else{
	header('Location: formulario.html');
}

?>