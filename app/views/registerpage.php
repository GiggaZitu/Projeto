<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - <?= APP_NOME ?></title>
    <link rel="stylesheet" href="<?= URL ?>/bootstrap/css/bootstrap.css">
</head>

<body>

    <?php include 'partials/header.php'; ?>
    <?php include 'partials/vlibras.php'; ?>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Cadastro de Usuário</h2>
            <form action="<?= URL ?>/user/register" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Cadastrar</button>
            </form>
            <div class="text-center mt-3">
                <p>Já tem uma conta? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></p>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="<?= URL ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>