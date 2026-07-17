<?php
// este es el modelo de la pagina de inicio

class IndexModel {

    // aqui guardamos la conexion que nos da la clase Database
    private $conexion;

    public function __construct() {
        $db = Database::getInstance();
        $this->conexion = $db->getConnection();
    }

    // trae todos los cursos destacados de la base de datos
    // esto reemplaza el array
    public function getAll() {

        $sql = "SELECT * FROM cursos_destacados";

        // usamos prepare y execute aunque aqui no hay datos externos
        // asi mantenemos siempre el mismo patron con PDO
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
