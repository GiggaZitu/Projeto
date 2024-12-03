<?php
// Incluindo o arquivo de configuração do banco de dados
require_once './../app/config/config.php';

try {
    // Conectar ao banco de dados usando PDO
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Exibir mensagem de erro de conexão
    die("Connection failed: " . $e->getMessage());
}

// Obtendo a rota da URL, sanitizando a entrada para evitar ataques
$request = htmlspecialchars($_GET['q'] ?? '', ENT_QUOTES, 'UTF-8');

// Switch para gerenciar as rotas
switch ($request) {
    case '':
        // Rota para a página inicial
        require_once './../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case 'projects':
        // Rota para a listagem de projetos
        require_once './../app/controllers/ProjectController.php';
        $controller = new ProjectController($pdo);
        $controller->index();
        break;

    case 'about':
        // Rota para a página "Sobre"
        require_once './../app/controllers/AboutController.php';
        $controller = new AboutController();
        $controller->index();
        break;

    case 'user':
        // Rota para a página de usuário
        require_once './../app/controllers/UserController.php';
        $controller = new UserController();
        $controller->index();
        break;

    case 'registerpage':
        // Rota para exibir a página de cadastro
        require_once './../app/controllers/UserController.php';
        $controller = new UserController();
        $controller->registerPage();
        break;

    case 'detalhes':
        // Rota para a listagem de projetos
        require_once './../app/controllers/ProjectController.php';
        $controller = new ProjectController($pdo);
        $controller->detalhes();
        break;

    default:
        // Caso a rota não seja encontrada, exibir página 404
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 - Página não encontrada</h1>";
        break;
}
