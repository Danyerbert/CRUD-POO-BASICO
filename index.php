<?php
require_once("config.php");
require_once("controllers/index-controlers.php");

if (isset($_GET['m'])) {
    if (method_exists("ModeloControllers", $_GET['m'])) {

        ModeloControllers::{$_GET['m']}();
    }
} else {

    ModeloControllers::index();
}





// phpinfo();

// var_dump(urlsite);
