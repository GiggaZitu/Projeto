<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sobre Nós - <?= APP_NOME ?></title>
    <style>
        .text-overlay { position: absolute; top: 40px; /* Ajuste conforme necessário */ left: 50%; /* Centraliza horizontalmente */ transform: translateX(-50%); /* Ajusta para centralização */  /* Fundo branco para destacar o texto */ padding: 0 10px; /* Padding para espaçamento */ 
            color: black; /* Cor do texto */ text-shadow: -2px -2px 0 white, 2px -2px 0 white, -2px 2px 0 white, 2px 2px 0 white; }
    </style>
</head>
<body >
    <?php include 'partials/header.php'; ?>
    <div class=" d-flex justify-content-center align-items-center flex-column container-wrapper">
    
    
    <div class="sobre-mim border border-dark rounded p-5" style="width: fit-content; height: fit-content;">
    <h1 class="text-center text-overlay pt-5">Sobre Nós</h1>
        <div class="foto">
            <img src="<?= URL ?>/images/foto1.jpg" alt="Função 1">
            <div class="info">
                <i class="icone-funcao fas fa-code"></i>
                <h7>NOME MOMENTANEO</h7>
                <h4>Desenvolvedor</h4>
            </div>
        </div>
        <div class="foto">
            <img src="<?= URL ?>/images/foto2.jpg" alt="Função 2">
            <div class="info">
                <i class="icone-funcao fas fa-paint-brush"></i>
                <h7>NOME MOMENTANEO</h7>
                <h4>Designer</h4>
            </div>
        </div>
        <div class="foto">
            <img src="<?= URL ?>/images/foto3.jpg" alt="Função 3">
            <div class="info">
                <i class="icone-funcao fas fa-lightbulb"></i>
                <h7>NOME MOMENTANEO</h7>
                <h4>Idealizador</h4>
            </div>
        </div>
        <div class="foto">
            <img src="<?= URL ?>/images/foto4.jpg" alt="Função 4">
            <div class="info">
                <i class="icone-funcao fas fa-project-diagram"></i>
                <h7>NOME MOMENTANEO</h7>
                <h4>Gerente do Projeto</h4>
            </div>
        </div>
        <div class="foto">
            <img src="<?= URL ?>/images/foto5.jpg" alt="Função 5">
            <div class="info">
                <i class="icone-funcao fas fa-address-book"></i>
                <h7>NOME MOMENTANEO</h7>
                <h4>Analista</h4>
            </div>
        </div>
    </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>
</html>