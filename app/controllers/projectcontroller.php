<?php
class ProjectController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        try {
            // Consulta todos os projetos no banco de dados
            $stmt = $this->pdo->query("SELECT * FROM projects");
            $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Inclui a página que exibirá os projetos
            require_once '../app/views/index.php';
        } catch (Exception $e) {
            echo "Erro ao carregar projetos: " . $e->getMessage();
        }
    }
    public function detalhes()
    {
        try {
            // Consulta todos os projetos no banco de dados
            $stmt = $this->pdo->query("SELECT * FROM projects");
            $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Inclui a página que exibirá os projetos
            include '../app/views/detalhes.php';
        } catch (Exception $e) {
            echo "Erro ao carregar projetos";
        }

    }
}
