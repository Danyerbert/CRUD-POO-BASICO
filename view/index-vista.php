<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">Nuevo</a>
<table id="table">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Opciones</td>
    </tr>
    <tbody>
        <?php
        if (!empty($dato)) :
            foreach ($dato as $key => $value);
            foreach ($value as $v) : ?>
                <tr>
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['nombre']; ?></td>
                    <td><?php echo $v['precio']; ?></td>
                    <td>
                        <a href="index.php?m=editar&id=<?php echo $v['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?m=eliminar&id=<?php echo $v['id'] ?>" class="btn" onclick="return confirm('¿Estas seguro?'); false">Eliminar</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        <?php else : ?>
            <tr>
                <td colspan="3">No hay Registros</td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>

<script>
    var Table = document.querySelector("#table");

    var dataTable = new DataTable(Table);
</script>

<?php
require("layouts/footer.php");
// var_dump($dato);
