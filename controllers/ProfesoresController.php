<?php
require_once __DIR__ . '/../models/ProfesorModel.php';


class ProfesoresController {
    private ProfesorModel $modeloProfesor;

    public function __construct() {
        $this->modeloProfesor = new ProfesorModel();
    }

    /**
     * Lista todos los profesores.
     */
    public function index(): void {
        $profesores = $this->modeloProfesor->obtenerTodos();
        require __DIR__ . '/../views/profesores/index.php';
    }


    public function ver(int $id): void {
        $profesor = $this->modeloProfesor->obtenerPorId($id);

        if (!$profesor) {
            http_response_code(404);
            echo "Profesor no encontrado.";
            return;
        }

        require __DIR__ . '/../views/profesores/detalle.php';
    }
}
