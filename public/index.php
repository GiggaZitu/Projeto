<?php
include './../app/config/config.php';


try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


$request = $_GET['q'] ?? '';


switch ($request) {
    case '':
        include './../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case 'projects':
        include './../app/controllers/ProjectController.php';
        $controller = new ProjectController($pdo); 
        $controller->index();
        break;

    case 'about':
        include './../app/controllers/AboutController.php';
        $controller = new AboutController();
        $controller->index();
        break;

    case 'user':
        include './../app/controllers/UserController.php';
        $controller = new UserController();
        $controller->index();
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 - Página não encontrada</h1>";
        break;
}
?>
