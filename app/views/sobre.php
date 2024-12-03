<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sobre Nós - <?= APP_NOME ?></title>
</head>

<body>

    <?php include 'partials/header.php'; ?>
    <?php include 'partials/vlibras.php'; ?>

    <div class="container my-5">
        <div class="text-center">
            <h1 class="pt-5">Sobre a Equipe</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="lead text-center mb-4">
                    A equipe por trás do <?= APP_NOME ?> é formada por um grupo de alunos do Instituto Federal de Rondônia - Campus Guajará-Mirim, que se uniram com o objetivo de contribuir no gerenciamento e desenvolvimento de projetos acadêmicos e culturais. 
                    Motivados pela vontade de melhorar a experiência educacional e proporcionar soluções eficientes, decidimos criar uma plataforma que seja útil tanto para alunos quanto para professores, com foco na organização e no fácil acesso às informações.
                </p>
                <p class="lead text-center mb-4">
                    Nosso trabalho é guiado pela paixão pela educação e pelo desejo de facilitar a gestão de projetos, além de promover a troca de conhecimentos entre a comunidade acadêmica. 
                    Cada membro da nossa equipe traz uma experiência única, e juntos buscamos inovar e agregar valor ao ambiente escolar.
                </p>
                <p class="text-center mb-4">
                    <i class="fas fa-users fa-3x text-success"></i>
                </p>
                <p class="text-center">
                    Estamos sempre abertos a novas ideias e colaborações, com o intuito de melhorar a plataforma e atender ainda mais às necessidades de todos. <br>
                    Juntos, somos mais fortes!
                </p>
            </div>
        </div>

        <!-- Imagens da equipe -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-2 col-sm-4 mb-4">
                <div class="position-relative text-center">
                    <img src="<?= URL ?>/images/foto1.jpg" class="img-fluid rounded" alt="Função 1">
                    <i class="fas fa-code position-absolute top-0 start-0 m-2 fs-4 text-success bg-white rounded-circle p-2"></i>
                </div>
                <div class="mt-2">
                    <p class="mb-1 fw-bold">NOME MOMENTANEO</p>
                    <h5>Desenvolvedor</h5>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 mb-4">
                <div class="position-relative text-center">
                    <img src="<?= URL ?>/images/foto2.jpg" class="img-fluid rounded" alt="Função 2">
                    <i class="fas fa-paint-brush position-absolute top-0 start-0 m-2 fs-4 text-success bg-white rounded-circle p-2"></i>
                </div>
                <div class="mt-2">
                    <p class="mb-1 fw-bold">NOME MOMENTANEO</p>
                    <h5>Designer</h5>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 mb-4">
                <div class="position-relative text-center">
                    <img src="<?= URL ?>/images/foto3.jpg" class="img-fluid rounded" alt="Função 3">
                    <i class="fas fa-lightbulb position-absolute top-0 start-0 m-2 fs-4 text-success bg-white rounded-circle p-2"></i>
                </div>
                <div class="mt-2">
                    <p class="mb-1 fw-bold">NOME MOMENTANEO</p>
                    <h5>Idealizador</h5>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 mb-4">
                <div class="position-relative text-center">
                    <img src="<?= URL ?>/images/foto4.jpg" class="img-fluid rounded" alt="Função 4">
                    <i class="fas fa-project-diagram position-absolute top-0 start-0 m-2 fs-4 text-success bg-white rounded-circle p-2"></i>
                </div>
                <div class="mt-2">
                    <p class="mb-1 fw-bold">NOME MOMENTANEO</p>
                    <h5>Gerente do Projeto</h5>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 mb-4">
                <div class="position-relative text-center">
                    <img src="<?= URL ?>/images/foto5.jpg" class="img-fluid rounded" alt="Função 5">
                    <i class="fas fa-address-book position-absolute top-0 start-0 m-2 fs-4 text-success bg-white rounded-circle p-2"></i>
                </div>
                <div class="mt-2">
                    <p class="mb-1 fw-bold">NOME MOMENTANEO</p>
                    <h5>Analista</h5>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="mailto:contato@empresa.com?subject=Contato sobre o <?= APP_NOME ?>&body=Olá, gostaria de entrar em contato com a equipe sobre" class="btn btn-primary btn-lg">
                Entrar em Contato
            </a>
        </div>

    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="<?= URL ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
