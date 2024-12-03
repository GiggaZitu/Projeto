<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="mb-0"><?= APP_NOME ?></h2>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= URL ?>projects">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= URL ?>about">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= URL ?>user">Usuário</a>
                </li>
            </ul>
        </nav>
        <div class="auth-buttons d-flex gap-2">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <a class="btn btn-primary btn-sm" href="<?= URL ?>registerpage">Cadastro</a>
        </div>
        <button class="btn btn-primary btn-sm" type="button" id="helpButton">
            <i class="fas fa-question-circle"></i>
        </button>
    </div>
    <div class="dropdown-menu" id="helpMenu">
        <a class="dropdown-item" href="mailto:contato@empresa.com?subject=Contato sobre <?= APP_NOME ?>&body=Olá, gostaria de entrar em contato com a equipe sobre">Contato</a>
        <a class="dropdown-item" href="<?= URL ?>about">Sobre Nós</a>
    </div>
</header>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= URL ?>" method="POST">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?= URL ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<script>
    document.getElementById('helpButton').addEventListener('click', function() {
        var helpMenu = document.getElementById('helpMenu');
        if (helpMenu.style.display === 'none' || helpMenu.style.display === '') {
            helpMenu.style.display = 'block';
            helpMenu.classList.add('slide-in');
        } else {
            helpMenu.style.display = 'none';
            helpMenu.classList.remove('slide-in');
        }
    });

    document.addEventListener('click', function(event) {
        var helpMenu = document.getElementById('helpMenu');
        var helpButton = document.getElementById('helpButton');
        if (!helpButton.contains(event.target) && !helpMenu.contains(event.target)) {
            helpMenu.style.display = 'none';
            helpMenu.classList.remove('slide-in');
        }
    });
</script>

<style>
    #helpMenu {
        display: none;
        position: absolute;
        top: 50px;
        right: 0;
        background-color: #343a40;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        z-index: 1000;
        opacity: 0;
        transform: translateX(100%);
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    #helpMenu.slide-in {
        opacity: 1;
        transform: translateX(0);
    }

    .dropdown-item {
        color: #ffffff;
        text-decoration: none;
    }

    .dropdown-item:hover {
        background-color: #28a745;
    }
</style>
