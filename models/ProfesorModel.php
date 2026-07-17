<?php
require_once __DIR__ . '/../config/database.php';


class ProfesorModel {
    private PDO $conn;
    private string $tabla = "profesores";

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function obtenerTodos(): array {
        $sql = "SELECT id, nombre, apellido, email, especialidad, biografia, foto, created_at
                FROM {$this->tabla}
                ORDER BY id ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerPorId(int $id) {
        $sql = "SELECT id, nombre, apellido, email, especialidad, biografia, foto, created_at
                FROM {$this->tabla}
                WHERE id = :id
                LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function crear(array $datos): bool {
        $sql = "INSERT INTO {$this->tabla} (nombre, apellido, email, especialidad, biografia, foto)
                VALUES (:nombre, :apellido, :email, :especialidad, :biografia, :foto)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nombre'       => $datos['nombre'],
            ':apellido'     => $datos['apellido'],
            ':email'        => $datos['email'],
            ':especialidad' => $datos['especialidad'] ?? null,
            ':biografia'    => $datos['biografia'] ?? null,
            ':foto'         => $datos['foto'] ?? '',
        ]);
    }

    public function actualizar(int $id, array $datos): bool {
        $sql = "UPDATE {$this->tabla}
                SET nombre = :nombre,
                    apellido = :apellido,
                    email = :email,
                    especialidad = :especialidad,
                    biografia = :biografia,
                    foto = :foto
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nombre'       => $datos['nombre'],
            ':apellido'     => $datos['apellido'],
            ':email'        => $datos['email'],
            ':especialidad' => $datos['especialidad'] ?? null,
            ':biografia'    => $datos['biografia'] ?? null,
            ':foto'         => $datos['foto'] ?? '',
            ':id'           => $id,
        ]);
    }

    public function eliminar(int $id): bool {
        $sql = "DELETE FROM {$this->tabla} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
