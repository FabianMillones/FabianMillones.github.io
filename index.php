<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millones Moto Repuestos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Millones Moto Repuestos y Servicios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron text-center d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4">Repuestos y Servicios para tu Moto</h1>
        <p class="lead">Encuentra lo que necesitas para mantener tu moto en perfecto estado.</p>
        <a class="btn btn-danger btn-lg" href="products.php" role="button">Ver productos</a>
    </div>

    <!-- Servicios Section -->
    <section class="services-section text-center">
        <div class="container">
            <h2>Servicios Destacados</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="img/reparar.jpg" class="card-img-top" alt="Servicio de Reparación de Motos">
                        <div class="card-body">
                            <h5 class="card-title">Reparación de Motos</h5>
                            <p class="card-text">Arregla tu moto aquí a precios accesibles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="img/soldar.jpg" class="card-img-top" alt="Servicio de Soldadura">
                        <div class="card-body">
                            <h5 class="card-title">Soldadura</h5>
                            <p class="card-text">Trabajamos en soldadura de aluminio, fierro y acero.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="img/repuestos.jpg" class="card-img-top" alt="Venta de Repuestos">
                        <div class="card-body">
                            <h5 class="card-title">Venta de Repuestos</h5>
                            <p class="card-text">Amplia variedad de repuestos originales y de calidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos Destacados Section -->
    <section class="container text-center my-5">
        <h2>Productos Destacados</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Filtro de Aire">
                    <div class="card-body">
                        <h5 class="card-title">Filtro de Aire</h5>
                        <p class="card-text">Precio: $25.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Bujía de Encendido">
                    <div class="card-body">
                        <h5 class="card-title">Bujía de Encendido</h5>
                        <p class="card-text">Precio: $10.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cadena de Transmisión">
                    <div class="card-body">
                        <h5 class="card-title">Cadena de Transmisión</h5>
                        <p class="card-text">Precio: $45.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>© 2024 Millones Moto Repuestos y Servicios. Todos los derechos reservados.</p>
            <p>
                <a href="#">Política de Privacidad</a> |
                <a href="#">Términos y Condiciones</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
