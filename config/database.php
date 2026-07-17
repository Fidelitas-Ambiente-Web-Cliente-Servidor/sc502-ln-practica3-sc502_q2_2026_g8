<?php
class Database {
    private static $instance = null;
    private $connection;
    private $host = 'db';           // 'db' para Docker, 'localhost' para XAMPP
    private $dbname = 'proyecto_db'; // Cambia por el nombre de TU base de datos
    private $username = 'root';
    private $password = 'root';

    private function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>