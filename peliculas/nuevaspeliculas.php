<!DOCTYPE html>
<html lang="es">

<head>
    <title>Peliculas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logoo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .navbar {
            background-color: #0F171E;
        }

        .navbar-brand img {
            width: 150px;
            margin-top: 10px;
        }

        .navbar-brand span {
            color: #FF0000;
        }

        .navbar-nav .nav-link {
            color: #FFFFFF;
            margin: 0 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #FF0000;
        }

        .movie-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 50px 0;
        }

        .movie-card {
            max-width: 250px;
            background-color: #1A232A;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .movie-card:hover {
            transform: translateY(-5px);
        }

        .movie-card img {
            width: 100%;
            height: auto;
        }

        .movie-card-content {
            padding: 20px;
        }

        .movie-title {
            font-size: 18px;
            color: #FFFFFF;
            margin-bottom: 10px;
            text-align: center;
        }

        .movie-link {
            display: block;
            text-align: center;
            color: #FFFFFF;
            text-decoration: none;
            background-color: #FF0000;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .movie-link:hover {
            background-color: #DC3545;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">
                <img src="assets/icons/logo2.png" alt="Peliculas MovieVerse">
                <span>MovieVerse</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="inicio.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Películas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="esperaacción.php">Acción</a></li>
                            <li><a class="dropdown-item" href="esperacienciaficción.php">Ciencia ficción</a></li>
                            <li><a class="dropdown-item" href="esperacomedia.php">Comedia</a></li>
                            <li><a class="dropdown-item" href="esperafantasía.php">Fantasía</a></li>
                            <li><a class="dropdown-item" href="esperamelodrama.php">Melodrama</a></li>
                            <li><a class="dropdown-item" href="esperamusical.php">Musical</a></li>
                            <li><a class="dropdown-item" href="esperaromance.php">Romance</a></li>
                            <li><a class="dropdown-item" href="esperasuspense.php">Suspense</a></li>
                            <li><a class="dropdown-item" href="esperaterror.php">Terror</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Nuevas Películas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Cerrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5 mb-4">Nuevas Estrenos de Películas y Series 2024</h1>
            </div>
        </div>
        <div class="movie-container">
            <div class="movie-card">
                <img src="assets\img\nueva peli3.jpg" alt="Orión y la oscuridad">
                <div class="movie-card-content">
                    <h2 class="movie-title">Orión y la oscuridad</h2>
                    <a href="https://www.youtube.com/embed/XyN_PN24PK8?si=DnbhpSSG_XZcd3H4" class="movie-link">Ver
                        Ahora</a>
                    <button onclick="editarPelicula()" class="btn btn-primary">Editar</button>
                    <button onclick="eliminarPelicula()" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="assets\img\nueva peli2.jpg" alt="Transformers: El último caballero">
                <div class="movie-card-content">
                    <h2 class="movie-title">Beekeeper: sentencia de muerte</h2>
                    <a href="https://www.youtube.com/embed/oJm0t84q8c8?si=bB8z5M1MsceBWkAU" class="movie-link">Ver Ahora</a>
                    <button onclick="editarPelicula()" class="btn btn-primary">Editar</button>
                    <button onclick="eliminarPelicula()" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="assets\img\nueva serie1.jpg" alt="Loki">
                <div class="movie-card-content">
                    <h2 class="movie-title">Loki</h2>
                    <a href="https://www.youtube.com/embed/RdGHx7U4DR8?si=F1-lKKm0_zYScYex" class="movie-link">Ver Ahora</a>
                    <button onclick="editarPelicula()" class="btn btn-primary">Editar</button>
                    <button onclick="eliminarPelicula()" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="assets\img\nueva serie2.jpg" alt="The Flash">
                <div class="movie-card-content">
                    <h2 class="movie-title">The Flash</h2>
                    <a href="https://www.youtube.com/embed/2mW6nJ_e0P4?si=wTD62VyR43_86c48" class="movie-link">Ver Ahora</a>
                    <button onclick="editarPelicula()" class="btn btn-primary">Editar</button>
                    <button onclick="eliminarPelicula()" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="text-muted">© 2024 MovieVerse. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function eliminarPelicula() {
            if (confirm("¿Estás seguro de que quieres eliminar esta película?")) {
                window.location.href = "crud/index.html";
            }
        }

        function editarPelicula() {
            if (confirm("¿Estás seguro de que quieres editar esta película?")) {
                window.location.href = "crud/index.html";
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
