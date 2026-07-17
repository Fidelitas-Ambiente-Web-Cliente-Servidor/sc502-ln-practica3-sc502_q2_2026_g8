<?php
require_once __DIR__ . '/../models/CursoModel.php';

class CursosController {
    private $model;

    public function __construct() {
        $this->model = new CursoModel();
    }

    // Acción index: listar cursos (con o sin filtro)
    public function index() {
        // Obtener categorías para el select
        $categorias = $this->model->getCategories();
        
        // Verificar si hay filtro por categoría
        if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
            $categoria = $_GET['categoria'];
            $cursos = $this->model->getByCategory($categoria);
            $categoriaSeleccionada = $categoria;
        } else {
            $cursos = $this->model->getAll();
            $categoriaSeleccionada = '';
        }

        // Incluir las vistas
        $pageTitle = 'Listado de Cursos';
        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/cursos.html';
        require __DIR__ . '/../views/layout/footer.php';
    }
}
?>