<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/style.css">
    <title>Projetos - <?= APP_NOME ?></title>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <h1>Projetos</h1>
    <ul>
        <?php foreach ($projects as $project): ?>
            <li><?= htmlspecialchars($project['title']) ?> - <?= htmlspecialchars($project['description']) ?></li>
        <?php endforeach; ?>
    </ul>
    <?php include 'partials/footer.php'; ?>
</body>
</html>
