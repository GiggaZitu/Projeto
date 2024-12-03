<?php
// Inclusão do arquivo de configuração para acesso ao banco de dados
include_once '../config/config.php';

class Project {

    // Função para obter todos os projetos
    public static function getAllProjects() {
        global $pdo; // Conexão com o banco de dados

        // Query para buscar todos os projetos
        $stmt = $pdo->query("SELECT * FROM projects");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Função para obter um projeto por ID
    public static function getProjectById($id) {
        global $pdo;

        // Prepara e executa a query para buscar o projeto específico
        $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Retorna o projeto encontrado
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
