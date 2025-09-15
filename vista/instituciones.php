<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instituciones - IAn bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <?php include '../components/nav.php'; ?>
        </div>
    </header>

    <!-- Breadcrumbs -->
    <div class="container mt-3">
        <?php include '../components/breadcrumbs.php'; ?>
        <?php renderBreadcrumbs(); ?>
    </div>


    <div class="container mb-5">
        <div class="text-center text-muted fs-5 mb-4">
            <i class="bi bi-shield-check text-primary me-2"></i>
            Conoce instituciones que asociadas a la salud mental.
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card card-custom animate__animated animate__fadeInLeft animate__slow animacion text-white">

                    <img src="../img/igor-omilaev-gVQLAbGVB6Q-unsplash.jpg" class="card-img" alt="Sin portada" />

                    <div class="card-img-overlay">
                        <h5 class="card-title title-content"></h5>
                        <p class="card-text text-content"></p>
                        <div class="card-date">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6c0-1.11-.89-2-2-2zM5 20V9h14v11H5z" />
                            </svg>
                            Última actualización:
                        </div>
                        <a href="" target="_blank" class="btn btn-outline-light mt-3 read-more-btn">
                            Leer más
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../components/return.php'; ?>
    <?php include '../components/footer.php'; ?>
    <?php include '../vista/login.php'; ?>

    <script src="../js/navbar.js"></script>
    <script src="../js/return.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>

</html>