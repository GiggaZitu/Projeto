<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - <?= APP_NOME ?></title>
    <link rel="stylesheet" href="<?= URL ?>/bootstrap/css/bootstrap.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 2px solid #e1e4e8;
            margin-bottom: 30px;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #0366d6;
        }

        .project-list li {
            border: 1px solid #e1e4e8;
            border-radius: 5px;
            background-color: #fff;
            margin-bottom: 15px;
            transition: box-shadow 0.2s;
        }

        .project-list li:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .project-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #0366d6;
            text-decoration: none;
        }

        .project-title:hover {
            text-decoration: underline;
        }

        .project-description {
            color: #6c757d;
        }
    </style>
</head>

<body>

    <?php include 'partials/header.php'; ?>
    <?php include 'partials/vlibras.php'; ?>

    <div class="container-fluid p-5">
        <div class="profile-header d-flex align-items-center mb-4">
            <img src="https://via.placeholder.com/100" alt="Avatar do Usuário" class="profile-avatar">
            <div>
                <h1>Usuário Desconhecido</h1>
                <p class="text-muted">Sem biografia disponível.</p>
            </div>
        </div>

        <h2 class="mb-3">Projetos do Usuário</h2>
        <ul class="list-unstyled project-list">
            <li class="p-3">
                <a href="#" class="project-title">Projeto Exemplo 1</a>
                <p class="project-description mb-0">Descrição curta do Projeto Exemplo 1.</p>
            </li>
            <li class="p-3">
                <a href="#" class="project-title">Projeto Exemplo 2</a>
                <p class="project-description mb-0">Descrição curta do Projeto Exemplo 2.</p>
            </li>
            <li class="p-3">
                <a href="#" class="project-title">Projeto Exemplo 3</a>
                <p class="project-description mb-0">Descrição curta do Projeto Exemplo 3.</p>
            </li>
        </ul>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="<?= URL ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>