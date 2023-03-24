<?php
require_once("models/index-model.php");
class ModeloControllers
{
    private $model;
    public function __construct()
    {
        $this->model = new Modelo();
    }

    // Mostrar Registro
    static function index()
    {
        $producto = new Modelo;
        $dato = $producto->mostrar("productos", "1");
        require_once("view/index-vista.php");
    }
    static function nuevo()
    {
        require_once("view/nuevo-vista.php");
    }
    static function guardar()
    {
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];

        $data = "'" . $nombre . "'," . $precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos", $data);
        header("location:" . urlsite);
    }
    static function editar()
    {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "id=" . $id);
        require_once("view/editar-vista.php");
    }
    static function actualizar()
    {
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "nombre='" . $nombre . "',precio=" . $precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos", $data, "id=" . $id);
        header("location:" . urlsite);
    }
    static function eliminar()
    {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos", "id=" . $id);
        header("location:" . urlsite);
    }
}
