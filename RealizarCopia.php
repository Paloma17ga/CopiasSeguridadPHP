<?Php
include_once 'head.php';
echo"<h2>este formulario es para hacer copias de seguridad</h2>";
echo'<form action="RealizarCopia.php" method="POST">
<input type="radio" name="rbCopia" value="0" />Solo una base de datos<br>
<input type="radio" name="rbCopia" value="0" /> Todas las bases de datos<br><input type="text" name="nombrecopia" value="" />
<input type="submit" value="Realizar" /><br>
</form>
</body>'


?>       