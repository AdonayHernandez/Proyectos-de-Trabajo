<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logoo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #141414;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #e50914;
        }

        .search-container {
            text-align: center;
            margin-top: 20px;
        }

        .search-box {
            width: 300px;
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            outline: none;
            margin-right: 10px;
        }

        .search-box::placeholder {
            color: #ccc;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #e50914;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #d30813;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .movie-info {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .synopsis,
        .rating,
        .movie-poster {
            flex-basis: 30%;
            text-align: center;
        }

        .synopsis h2,
        .rating h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .synopsis p,
        .rating p {
            font-size: 1.2rem;
        }

        .footer {
            background-color: #141414;
            color: #ccc;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            clear: both;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .movie-separator {
            margin-top: 40px;
            border-top: 1px solid #999;
            width: 100%;
        }

        /* Estilos para el carrusel */
        .carousel-inner {
            display: flex;
        }

        .carousel-item {
            flex: 0 0 100%;
            /* El ancho de cada item del carrusel */
            max-width: 100%;
            /* Ajustar al ancho del carrusel */
        }

        /* Estilo para los botones del carrusel */
        .carousel-control-prev,
        .carousel-control-next {
            color: blue;
            /* Cambiar el color de los botones aquí */
        }

        .movie-poster img {
            cursor: pointer;
        }

        .video-container {
            position: relative;
            width: 560px;
            height: 315px;
            margin: auto;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .poster {
            display: block;
        }

        .hidden {
            display: none;
        }

        /* Estilos para los botones de acciones */
        .actions {
            text-align: center;
            margin-top: 20px;
        }

        .actions .btn {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="container">
            <a href="inicio.php" class="navbar-brand">MovieVerse</a>
            <div class="search-container">
                <input type="text" placeholder="Buscar..." class="search-box">
                <button class="search-button">Buscar</button>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center">Últimos Estrenos</h2>
        <div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Película 1 -->
                <div class="carousel-item active">
                    <div class="page-header">
                        <h1>Paul</h1>
                    </div>
                    <div class="movie-info">
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                En un futuro cercano, una tecnología llamada 'túnel cuántico' permite viajar entre
                                universos paralelos. Allí, el agente Law Gabe descubre que está en el punto de mira de
                                otra versión de sí mismo.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 6.9/10</p>
                            <p>Año de Lanzamiento: 2011 </p>
                            <p>Duración: 1h 50m</p>
                            <!-- Botones de acciones -->
                            <div class="actions">
                                <button class="btn btn-primary" onclick="confirmarEditar()">Editar</button>
                                <button class="btn btn-danger" onclick="confirmarEliminar()">Eliminar</button>
                            </div>
                        </div>
                        <!-- Cambios en la imagen -->
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%; height: auto;" src="assets\img\comedia 1.jpg" alt="Paul" class="poster" onclick="playVideo('VIDEO_ID1')">
                                <iframe src="https://www.youtube.com/embed/N_YrFMAEKKA?si=Ci7VfVQhKhBh65nK" frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Película 2 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Johnny English 3.0</h1>
                    </div>
                    <div class="movie-info">
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                Una semana antes de la primera cumbre del G12 de la Primera Ministra británica, el MI7
                                sufre un ciberataque. Con la identidad de todos los agentes secretos británicos al
                                descubierto, la única solución es acudir a un exagente: Johnny English, quien hará lo
                                imposible por capturar al pirata informático.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 6.2/10</p>
                            <p>Año de Lanzamiento: 2018 </p>
                            <p>Duración: 1h 28m</p>
                            <!-- Botones de acciones -->
                            <div class="actions">
                                <button class="btn btn-primary" onclick="confirmarEditar()">Editar</button>
                                <button class="btn btn-danger" onclick="confirmarEliminar()">Eliminar</button>
                            </div>
                        </div>
                        <!-- Cambios en la imagen -->
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%; height: auto;" src="assets\img\comedia 2.jpg" alt="Jhonny 3.0" class="poster" onclick="playVideo('VIDEO_ID2')">
                                <iframe src="https://www.youtube.com/embed/Bmfgy0xux1A?si=PQ0-ybjP7Kj5lCuG" frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Película 3 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Hombres de negro</h1>
                    </div>
                    <div class="movie-info">
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                Durante muchos años los extraterrestres han vivido en la Tierra, mezclados con los seres
                                humanos, sin que nadie lo supiese. Los Hombres de Negro son agentes especiales que
                                forman parte de una unidad altamente secreta del gobierno; su misión consiste en
                                controlar a los alienígenas. Dos de estos agentes (uno veterano y otro recién
                                incorporado), cuya misión consiste en vigilar a los alienígenas que viven en Nueva York,
                                descubren a un terrorista galáctico que pretende acabar con la Humanidad.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 6.2/10</p>
                            <p>Año de Lanzamiento: 1997 </p>
                            <p>Duración: 1h 38min</p>
                            <!-- Botones de acciones -->
                            <div class="actions">
                                <button class="btn btn-primary" onclick="confirmarEditar()">Editar</button>
                                <button class="btn btn-danger" onclick="confirmarEliminar()">Eliminar</button>
                            </div>
                        </div>
                        <!-- Cambios en la imagen -->
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%; height: auto;" src="assets\img\comedia 3.jpeg" alt="Hombres de negro" class="poster" onclick="playVideo('VIDEO_ID3')">
                                <iframe src="https://www.youtube.com/embed/bR8ZiEjZfBY?si=En04MHRlCrwU4tCu" frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Botones de control del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#movieCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#movieCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <footer class="footer">
        MovieVerse
    </footer>

    <script>
        function playVideo(videoId) {
            var posters = document.querySelectorAll('.poster');
            posters.forEach(function (poster) {
                poster.style.display = 'block';
            });

            var iframes = document.querySelectorAll('iframe');
            iframes.forEach(function (iframe) {
                iframe.classList.add('hidden');
            });

            var poster = event.currentTarget;
            var container = poster.parentNode;
            var iframe = container.querySelector('iframe');
            poster.style.display = 'none';
            iframe.classList.remove('hidden');
        }

        // Funciones para mostrar diálogo de confirmación al presionar botones de editar y eliminar
        function confirmarEditar() {
            if (confirm("¿Estás seguro de que deseas editar la película seleccionada?")) {
                window.location.href = "crud/index.html";
            }
        }

        function confirmarEliminar() {
            if (confirm("¿Estás seguro de que deseas eliminar la película seleccionada?")) {
                window.location.href = "crud/index.html";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
