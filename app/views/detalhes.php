<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Projeto - Exemplo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .project-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .project-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .project-title {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .project-description {
            font-size: 1.2rem;
            margin-top: 10px;
            font-style: italic;
        }

        .section-title {
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 1.8rem;
            font-weight: bold;
            color: #007bff;
        }

        .project-details p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .btn-project {
            background-color: #28a745;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 5px;
        }

        .btn-project:hover {
            background-color: #218838;
        }

        .report,
        .image-upload,
        .activity {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .report h5,
        .activity h5 {
            font-weight: bold;
            font-size: 1.2rem;
            color: #007bff;
        }

        .image-preview {
            margin-top: 15px;
        }

        .image-preview img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .info-box {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
        }

        .info-box p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <?php include 'partials/header.php'; ?>
    <?php include 'partials/vlibras.php'; ?>

    <div class="container py-5">

        <div class="project-header">
            <img src="https://via.placeholder.com/400x400" alt="Imagem do Projeto" class="project-image">
            <h1 class="project-title">Projeto Exemplo</h1>
            <p class="project-description">Este projeto tem como objetivo criar uma plataforma inovadora para facilitar a comunicação entre equipes.</p>
        </div>

        <div class="info-box">
            <h3 class="section-title">Informações do Projeto</h3>
            <p><strong>Data de Início:</strong> 01/01/2024</p>
            <p><strong>Status:</strong> Em Andamento</p>
            <p><strong>Equipe:</strong> João, Maria, Pedro</p>
            <p><strong>Objetivo:</strong> Criar uma plataforma de comunicação eficiente entre equipes.</p>
            <p><strong>Tecnologias:</strong> PHP, MySQL, Bootstrap</p>
        </div>

        <div class="report">
            <h5>Adicionar Relatório</h5>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="report-title">Título do Relatório</label>
                    <input type="text" id="report-title" class="form-control" placeholder="Digite o título do relatório">
                </div>
                <div class="form-group">
                    <label for="report-content">Conteúdo do Relatório</label>
                    <textarea id="report-content" class="form-control" rows="4" placeholder="Digite o conteúdo do relatório"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar Relatório</button>
            </form>
        </div>

        <div class="report">
            <h5>Relatórios Existentes</h5>
            <p><strong>Relatório 1:</strong> Relatório sobre o andamento do projeto, atividades e próximos passos.</p>
            <p><strong>Relatório 2:</strong> Relatório com atualização de equipe e alocação de recursos.</p>
        </div>

        <div class="image-upload">
            <h5>Adicionar Imagem</h5>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image-upload">Escolha uma imagem</label>
                    <input type="file" id="image-upload" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Enviar Imagem</button>
            </form>

            <div class="image-preview">
                <h5>Imagens do Projeto</h5>
                <img src="https://via.placeholder.com/1200x400" alt="Imagem do Projeto">
                <img src="https://via.placeholder.com/1200x400" alt="Imagem do Projeto">
            </div>
        </div>

        <div class="activity">
            <h5>Adicionar Atividade</h5>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="activity-title">Título da Atividade</label>
                    <input type="text" id="activity-title" class="form-control" placeholder="Digite o título da atividade">
                </div>
                <div class="form-group">
                    <label for="activity-description">Descrição da Atividade</label>
                    <textarea id="activity-description" class="form-control" rows="4" placeholder="Descreva a atividade a ser realizada"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar Atividade</button>
            </form>
        </div>

        <div class="activity">
            <h5>Atividades Recentes</h5>
            <p><strong>Atividade 1:</strong> Reunião de planejamento com a equipe de desenvolvimento.</p>
            <p><strong>Atividade 2:</strong> Discussão sobre os requisitos da plataforma com o cliente.</p>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn-project">Acompanhar Projeto</a>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>