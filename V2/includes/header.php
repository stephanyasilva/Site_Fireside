<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container">

        <a class="navbar-brand mt-3 mt-md-2" href="<?= BASE_URL ?>index.php">
            <img class="logo logo-light img-fluid" src="<?= ASSETS ?>images/logo-fireside-ht.png" alt="Fireside">
            <img class="logo logo-dark img-fluid" src="<?= ASSETS ?>images/logo-fireside-hv.png" alt="Fireside">
        </a>

        <button class="navbar-toggler me-3 me-md-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-navbar" id="navbarNav">
            <ul class="navbar-nav ms-auto text-start text-md-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>sobre.php">Sobre Nós</a>
                </li>
                <li class="nav-item dropdown px-md-5">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Serviços
                    </a>

                    <ul class="dropdown-menu custom-dropdown">
                        <li><a class="dropdown-item" href="<?= SERVICOS ?>alarme-incendio.php">Sistema de alarme de incêndio</a></li>
                        <li><a class="dropdown-item" href="<?= SERVICOS ?>pressurizacao.php">Pressurização de Escada</a></li>
                        <li><a class="dropdown-item" href="<?= SERVICOS ?>manutencao.php">Manutenção em sistemas de alarme</a></li>
                        <li><a class="dropdown-item" href="<?= SERVICOS ?>acessoria-avcb.php">Assessoria AVCB/CLCB</a></li>
                        <li><a class="dropdown-item" href="<?= SERVICOS ?>sistema-sprinkler.php">Sistema de Sprinkler</a></li>
                        <li><a class="dropdown-item" href="<?= SERVICOS ?>placas-identificacao.php">Placas de identificação</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>