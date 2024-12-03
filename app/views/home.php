<?php
include_once './../app/config/config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/bootstrap/css/bootstrap.css">
    <title>Home - <?= APP_NOME ?></title>
</head>

<body>

    <?php include 'partials/header.php'; ?>
    <?php include 'partials/vlibras.php'; ?>

    <div class="container-fluid p-0">
        <img src="<?= URL ?>/images/home.png" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;" alt="Imagem principal">
    </div>

    <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h1 class="display-4">Bem-vindo ao <?= APP_NOME ?>!</h1>
                <p class="lead">
                    O <?= APP_NOME ?> é a sua plataforma para explorar os recursos acadêmicos, culturais e tecnológicos oferecidos pelo Instituto Federal de Rondônia - Campus Guajará-Mirim.
                    Aqui você encontra informações essenciais, eventos e ferramentas para enriquecer sua experiência educacional e profissional.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?= URL ?>/images/campus.jpeg" class="img-fluid rounded shadow" alt="Imagem do campus">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <h1 class="display-4">Sobre o <?= APP_NOME ?></h1>
                <p class="lead">
                    O <?= APP_NOME ?> foi desenvolvido para oferecer suporte aos alunos e professores do Instituto Federal de Rondônia - Campus Guajará-Mirim.
                    Nosso objetivo é facilitar a comunicação e promover o acesso a projetos acadêmicos.
                </p>
                <p class="lead">
                    Acreditamos no poder da educação como uma ferramenta transformadora e trabalhamos para tornar o aprendizado mais acessível e organizado.
                    Seja bem-vindo e aproveite os recursos disponíveis!
                </p>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="<?= URL ?>/images/campus.jpeg" class="img-fluid rounded shadow" alt="Imagem do campus">
            </div>
        </div>
    </div>

    <!-- Área do botão Ir para Projetos -->
    <div class="container text-center my-5">
        <a href="<?= URL ?>projects" class="btn btn-primary btn-lg">Ir para Projetos</a>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="<?= URL ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
