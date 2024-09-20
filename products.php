<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambiar según tu configuración
$password = ""; // Cambiar según tu configuración
$dbname = "millones_shop"; // Cambiar por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si hay una búsqueda activa
$busqueda = "";
$resultados = [];

if (isset($_GET['busqueda'])) {
    $busqueda = $conn->real_escape_string($_GET['busqueda']);

    // Consulta SQL para buscar productos por nombre o categoría
    $sql = "SELECT Productos.Nombre AS NombreProducto, Productos.Descripcion, Productos.Precio, Categorias.Nombre AS NombreCategoria
            FROM Productos
            JOIN Categorias ON Productos.ID_Categoria = Categorias.ID_Categoria
            WHERE Productos.Nombre LIKE '%$busqueda%' OR Categorias.Nombre LIKE '%$busqueda%'";

    $resultado = $conn->query($sql);

    // Si hay resultados, guardarlos en un array
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $resultados[] = $fila;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Productos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .search-section {
            padding: 60px 0;
        }

        .search-section h2 {
            margin-bottom: 40px;
            color: #C62828; /* Rojo oscuro */
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <a class="navbar-brand" href="#">Millones Moto Repuestos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
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

    <!-- Search Section -->
    <section class="search-section text-center">
        <div class="container">
            <h2>Buscar Productos</h2>
            <form action="products.php" method="GET" class="form-inline justify-content-center">
                <input type="text" name="busqueda" class="form-control mr-2" placeholder="Buscar por nombre o categoría" value="<?php echo htmlspecialchars($busqueda); ?>">
                <button type="submit" class="btn btn-danger">Buscar</button>
            </form>
        </div>
    </section>

    <!-- Results Section -->
    <section class="container mt-5">
        <?php if (count($resultados) > 0): ?>
            <h3 class="text-center">Resultados de la Búsqueda</h3>
            <table class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultados as $producto): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto['NombreProducto']); ?></td>
                            <td><?php echo htmlspecialchars($producto['Descripcion']); ?></td>
                            <td>S/<?php echo number_format($producto['Precio'], 2); ?></td>
                            <td><?php echo htmlspecialchars($producto['NombreCategoria']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php elseif ($busqueda): ?>
            <div class="alert alert-danger text-center">No se encontraron productos para la búsqueda "<?php echo htmlspecialchars($busqueda); ?>"</div>
        <?php endif; ?>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
