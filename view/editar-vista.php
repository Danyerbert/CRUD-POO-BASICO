<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">Editar</h1>
<form action="" method="get">
    <?php
    foreach ($dato as $key => $value) :
        foreach ($value as $v) : ?>
            <input type="text" value="<?php echo $v['nombre'] ?>" name="nombre" id=""><br>
            <input type="text" value="<?php echo $v['precio'] ?>" name="precio" id=""><br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id" id=""><br>
            <input type="submit" class="btn" name="btn" value="ACTUALIZAR"><br>
            <input type="hidden" name="m" value="actualizar">
    <?php
        endforeach;
    endforeach;
    ?>
</form>
<?php
require("layouts/footer.php");
