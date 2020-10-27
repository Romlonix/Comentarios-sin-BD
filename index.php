<html> 
<head> 
<title>Sección de Comentarios</title> 
</head> 
<body> 
<?php 
	readfile ('comentario.txt'); 
?> 
<style>
body {
    font-family: Helvetica;
}
input {
    width: 300px;
}
textarea {
    width: 300px;
    height: 100px;
}
span {
    font-weight: bold;
}
</style>
<h1>DEJAR UN COMENTARIO</h1> 
<form name="coment" action="publicar.php" method="post"> 
	<p><span>Nombre :</b></p> 
	<p><input type="text" name="nombre"/></p> 
	<p><span>Comentario :</span></p> 
	<p><textarea name="comentario"></textarea></p> 
	<p><input type="submit" name="submit" value="Publicar"/></p> 
</form> 
</body> 
</html>