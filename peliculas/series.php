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
                <!-- Serie 1 -->
                <div class="carousel-item active">
                    <div class="page-header">
                        <h1>Smallville</h1>
                    </div>
                    <div class="movie-info">
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                La serie narra las aventuras del joven Clark Kent en el pueblo ficticio de Smallville,
                                Kansas, durante los años previos a que él se convierta en Superman. Las primeras cuatro
                                temporadas se centran en Clark y sus amigos durante el instituto (High School).
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐⭐ 7.3</p>
                            <p>Año de Lanzamiento: 2001 </p>
                            <p>Duración: 10 Temporadas</p>
                            <!-- Botones para editar y eliminar serie -->
                            <a href="crud/index.html" class="btn btn-danger">Eliminar Serie</a>
                            <a href="crud/index.html" class="btn btn-primary">Editar Serie</a>
                        </div>
                        <!-- Cambios en la imagen -->
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%; height: auto;" src="assets\img\series 1.jpg" alt="Smallville" class="poster"
                                    onclick="playVideo('VIDEO_ID1')">
                                <iframe src="https://www.youtube.com/embed/gEpUWSqjLJI?si=3jhVelPxxMcFIQav"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Serie 2 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Dragon Ball Z</h1>
                    </div>
                    <div class="movie-info">
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                La trama de Dragon Ball Z se centra en la vida adulta de Son Goku, quien tendrá que
                                defender la tierra de los numerosos villanos que amenazan con destruirla. Además, la
                                serie trama de forma paralela la madurez de su hijo Gohan. La producción destaca por
                                tener un tono más serio que su predecesora.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐⭐⭐ 9.2/10</p>
                            <p>Año de Lanzamiento: 1989 </p>
                            <p>Duración: 5 Temporadas</p>
                            <!-- Botones para editar y eliminar serie -->
                            <a href="crud/index.html" class="btn btn-danger">Eliminar Serie</a>
                            <a href="crud/index.html" class="btn btn-primary">Editar Serie</a>
                        </div>
                        <!-- Cambios en la imagen -->
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%; height: auto;" src="assets\img\series 2.jpg" alt="Dragon Ball Z" class="poster"
                                    onclick="playVideo('VIDEO_ID2')">
                                <iframe src="https://www.youtube.com/embed/bzZ8s8ka_Eo?si=i9Q5JNmFN2o9CfxU"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Serie 3 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Superman & Lois</h1>
                    </div>
                    <div class="movie-info">
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                Superman & Lois es una serie de aventuras sobre la vida de Clark Kent y su pareja
                                periodista Lois Lane mientras se enfrentan a una vida profesional y a una vida familiar
                                un tanto agitada, añadiendo de que se tratan de unos padres jóvenes en la sociedad de
                                hoy día.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 6.5/10</p>
                            <p>Año de Lanzamiento: 2021 </p>
                            <p>Duración: 3 Temporadas</p>
                            <!-- Botones para editar y eliminar serie -->
                            <a href="crud/index.html" class="btn btn-danger">Eliminar Serie</a>
                            <a href="crud/index.html" class="btn btn-primary">Editar Serie</a>
                        </div>
                        <!-- Cambios en la imagen -->
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%; height: auto;" src="assets\img\series 3.jpeg" alt="Superman & Lois" class="poster" onclick="playVideo('VIDEO_ID3')">
                                <iframe src="https://www.youtube.com/embed/uWh5JdynBUM?si=oGHxLWj7otUhkf4V"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
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

        // Función para confirmar la eliminación de una serie
        function confirmarEliminarSerie() {
            if (confirm("¿Estás seguro de que deseas eliminar la serie seleccionada?")) {
                window.location.href = "/crud/index.html";
            }
        }

        // Función para editar la serie
        function editarSerie() {
            // Aquí puedes agregar la lógica para editar la serie
            alert("Editar serie");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
