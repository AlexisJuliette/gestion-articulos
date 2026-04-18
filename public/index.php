<?php

require_once __DIR__ . '/../src/Domain/Articulo.php';
require_once __DIR__ . '/../src/Infrastructure/Persistence/MySQLArticuloRepository.php';

$articulo = new Articulo(null, "Celular", "Celular gama alta");

$repo = new MySQLArticuloRepository();
$repo->save($articulo);

echo "articulo guardado";