<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'cursos';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = __DIR__ . "/controllers/{$controllerClass}.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerInstance = new $controllerClass();

    if (method_exists($controllerInstance, $action)) {
        if ($id !== null) {
            $controllerInstance->$action($id);
        } else {
            $controllerInstance->$action();
        }
    } else {
        echo "Acción no encontrada: $action";
    }
} else {
    echo "Controlador no encontrado: $controllerClass";
}
?>