<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/bootstrap/css/bootstrap.css">
    <style>
        .project-card {
            width: 270px;
            height: 200px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .project-title,
        .project-description {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .project-description {
            max-width: 100%;
        }

        .list-container {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin: 20px;
        }

        .list-header {
            cursor: pointer;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 5px;
        }

        .list-content {
            display: none;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .buttonDetalhes:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
    <title>Projetos - <?= APP_NOME ?></title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include 'partials/header.php'; ?>
    <?php include 'partials/vlibras.php'; ?>

    <div class="container py-5 flex-grow-1">
        <h1>Projetos</h1>

        <div class="text-center mb-4">
            <p>Projetos em Destaque</p>
            <div class="row justify-content-center gap-4">
                <?php
                $max = count($projects);
                $min = 1;

                $destaque_ids = [
                    random_int($min, $max),
                    random_int($min, $max),
                    random_int($min, $max),
                    random_int($min, $max),
                    random_int($min, $max)
                ];

                $destaque_projects = [];
                foreach ($destaque_ids as $id) {
                    $project = $projects[$id - 1];
                    $destaque_projects[] = $project;
                }
                ?>
                <?php foreach ($destaque_projects as $project): ?>

                    <div class="card border-dark project-card" style="width: 17%; height: 250px;">
                        <a href="<?= URL ?>detalhes?id=<?= $project['id'] ?>" class="project-title link-offset-2 link-underline link-underline-opacity-0 link-body-emphasis">
                        <img src="https://via.placeholder.com/100" class="card-img-top" alt="Projeto Imagem" style="width: 100px; height: 100px;">

                            <div class="card-body p-2">
                                <h5 class="card-title"><?= htmlspecialchars($project['title']) ?></h5>
                                <p class="card-text text-truncate" title="<?= htmlspecialchars($project['description']) ?>"><?= htmlspecialchars($project['description']) ?></p>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>

        <h2 class="cursor-pointer list-header" data-bs-toggle="collapse" data-bs-target="#allProjectsList" aria-expanded="false" aria-controls="allProjectsList">
            Todos os Projetos
        </h2>
        <div class="collapse" id="allProjectsList">
            <ul class="list-group">
                <?php foreach ($projects as $project): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= htmlspecialchars($project['title']) ?> - <?= htmlspecialchars($project['description']) ?>
                        <a href="<?= URL ?>detalhes?id=<?= $project['id'] ?>" class="buttonDetalhes btn btn-primary">
                            Ver Detalhes
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="<?= URL ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
