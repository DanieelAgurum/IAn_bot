<nav class="navbar navbar-expand-lg main-nav px-0">
    <div class="container">

        <a class="navbar-brand app-name" href="index.php">
            IAn Bot
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto text-uppercase f1">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="vista/instituciones.php" class="nav-link">Instituciones</a>
                </li>
                <li class="nav-item">
                    <a href="#Glosario" class="nav-link">Glosario</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#authModal">Iniciar sesión</a>
                </li>
            </ul>

            <div class="search-wrapper d-none d-lg-flex align-items-center ms-3">
                <form class="search-wrapper d-none d-lg-flex align-items-center ms-auto me-3" role="search">
                    <i class="fas fa-search search-icon"></i>
                    <input class="search-input" type="search" placeholder="Buscar...">
                    <button type="submit" style="display:none;"></button> <!-- opcional, Enter envía -->
                </form>
            </div>

            <form class="d-flex d-lg-none mt-3 search-form-mobile" role="search">
                <input class="form-control" type="search" placeholder="Buscar...">
                <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>