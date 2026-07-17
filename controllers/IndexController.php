<?php
// controlador de la pagina de inicio

require_once "config/database.php";
require_once "models/IndexModel.php";

class IndexController {

    public function index() {

        $modelo = new IndexModel();

        // pedimos al modelo la lista de cursos destacados
        $cursos = $modelo->getAll();

        // mandamos la variable $cursos a la vista
        $pageTitle = 'Inicio';
        require "views/layout/header.php";
        require "views/index.html";
        require "views/layout/footer.php";
    }
}
