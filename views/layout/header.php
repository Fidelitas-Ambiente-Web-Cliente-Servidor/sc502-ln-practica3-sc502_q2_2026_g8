<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - Academia Codice' : 'Academia Codice' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php?controller=index&action=index">Academia Codice</a>
      <div class="navbar-nav">
        <a class="nav-link" href="index.php?controller=index&action=index">Inicio</a>
        <a class="nav-link" href="index.php?controller=cursos&action=index">Cursos</a>
        <a class="nav-link" href="index.php?controller=profesores&action=index">Profesores</a>
        <a class="nav-link" href="index.php?controller=contacto&action=index">Contacto</a>
      </div>
    </div>
  </nav>

