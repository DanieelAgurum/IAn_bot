<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - IAn bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <?php include 'components/nav.php'; ?>
        </div>
    </header>

    <section class="hero">
        <div class="container animate__animated animate__fadeInLeft animate__slow">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="display-4 fw-bold">Bienvenido a nuestro sitio</h1>
                    <p class="lead mb-4">Explora nuestras funcionalidades y conoce todo lo que ofrecemos.</p>
                    <a href="#!" class="btn btn-dark btn-lg">Comenzar</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    <?php include 'modelo/login.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>

</html>