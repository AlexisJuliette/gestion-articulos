<?php

require_once __DIR__ . '/../../Domain/Articulo.php';
require_once __DIR__ . '/../../Domain/ArticuloRepository.php';
require_once __DIR__ . '/../../../config/database.php';

class MySQLArticuloRepository implements ArticuloRepository {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function save(Articulo $articulo) {
        $sql = "INSERT INTO articulos (nombre, descripcion) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $articulo->getNombre(),
            $articulo->getDescripcion()
        ]);
    }
}