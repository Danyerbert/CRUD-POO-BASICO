<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">nuevo</h1>
<form action="" method="get">
    <input type="text" placeholder="Nombre del Producto" name="nombre" id=""><br>
    <input type="text" placeholder="Ingrese el precio" name="precio" id=""><br>
    <input type="submit" class="btn" name="btn" value="Guardar"><br>
    <input type="hidden" name="m" value="Guardar">
</form>
<?php
require("layouts/footer.php");
