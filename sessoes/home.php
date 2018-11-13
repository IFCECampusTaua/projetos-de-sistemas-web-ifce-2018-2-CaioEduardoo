<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	h1{
		color: blue;
		text-align: center;
		font-family: arial;
	}

</style>
</head>
<body>

<?php
session_start();
$sim=$_SESSION["logou"]; 
if ($sim==1) {
	echo '<h1><img src="https://thumbs.gfycat.com/FilthyBrightAzurevase-size_restricted.gif"></h1>';
}else{
	header('Location: formulario.html');
}
?>

</body>
</html>