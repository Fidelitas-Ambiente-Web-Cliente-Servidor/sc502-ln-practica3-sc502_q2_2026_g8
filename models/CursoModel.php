<?php
require_once __DIR__ . '/../config/database.php';

class CursoModel {
    private $conn;

    public function __construct() {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    // Obtener todos los cursos
    public function getAll() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM cursos ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    // Obtener cursos por categoría
    public function getByCategory($categoria) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM cursos WHERE categoria = :categoria ORDER BY id DESC");
            $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    // Obtener todas las categorías distintas (para el select)
    public function getCategories() {
        try {
            $stmt = $this->conn->prepare("SELECT DISTINCT categoria FROM cursos ORDER BY categoria");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $e) {
            return [];
        }
    }
}
?>