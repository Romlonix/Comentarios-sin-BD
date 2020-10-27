<?php 
	$nombre = $_POST['nombre']; 
	$comentario = $_POST['comentario']; 
	$fp=fopen("comentario.txt","a+" );
    $salida="
        <form style='margin-bottom: 10px; font-family: Helvetica;'>
            <fieldset style='background-color: steelblue; border: solid 2px black;'>
                <legend style='background-color: aliceblue; border: 2px solid black;'>$nombre</legend>
                <spam>$comentario</spam>
            </fieldset>
        </form>
        <!-- finish coment -->
    ";
	fwrite($fp,$salida); 
	fclose($fp); 
	header("Location:index.php" ); 
?>