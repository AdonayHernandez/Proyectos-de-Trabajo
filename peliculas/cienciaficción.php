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
            align-items: flex-start;
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

        .carousel-inner {
            display: flex;
        }

        .carousel-item {
            flex: 0 0 100%;
            max-width: 100%;
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

        .actions {
            display: flex;
            flex-direction: column; /* Cambio a columna */
            align-items: center;
            margin-top: 20px;
        }

        .actions a {
            margin: 5px 0;
            padding: 5px 10px;
            font-size: 14px;
        }

        .movie-poster-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .movie-info-container {
            display: flex;
            flex-direction: column;
            align-items: center;
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
                        <h1>Godzilla y Kong: el nuevo imperio</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster-container">
                            <div class="video-container">
                                <img style=" width: 100%;
            height: auto;" src="assets\img\ciencia ficcion.jpg" alt="Godzilla y Kong" class="poster"
                                    onclick="playVideo('VIDEO_ID1')">
                                <iframe src="https://www.youtube.com/embed/Aq1F4cQmEhM?si=4S0Pi2i7uXrFhCB" frameborder="0" allowfullscreen
                                    class="hidden"></iframe>
                            </div>
                            <div class="actions">
                                <a href="crud/index.html" class="btn btn-danger">Eliminar</a>
                                <a href="crud/index.html" class="btn btn-primary">Editar</a>
                            </div>
                        </div>
                        <div class="movie-info-container">
                            <div class="synopsis">
                                <h2>Synopsis:</h2>
                                <p>
                                    Godzilla y Kong se enfrentan a una amenaza colosal escondida en lo profundo del
                                    planeta, desafiando su propia existencia y la supervivencia de la raza humana.
                                </p>
                            </div>
                            <div class="rating">
                                <h2>Calificación:</h2>
                                <p>⭐⭐⭐⭐ 7.4</p>
                                <p>Año de Lanzamiento: 2024 </p>
                                <p>Duración: 1h 55m</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Película 2 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Ghostbusters: apocalipsis fantasma</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster-container">
                            <div class="video-container">
                                <img style=" width: 100%;
            height: auto;" src="assets\img\ciencia ficcion 2.jpg" alt="Ghostbusters" class="poster"
                                    onclick="playVideo('VIDEO_ID2')">
                                <iframe src="https://www.youtube.com/embed/fFam2Bfre8U" frameborder="0" allowfullscreen
                                    class="hidden"></iframe>
                            </div>
                            <div class="actions">
                                <a href="crud/index.html" class="btn btn-danger">Eliminar</a>
                                <a href="crud/index.html" class="btn btn-primary">Editar</a>
                            </div>
                        </div>
                        <div class="movie-info-container">
                            <div class="synopsis">
                                <h2>Synopsis:</h2>
                                <p>
                                    La familia Spengler regresa a la famosa estación de bomberos de la ciudad de Nueva York
                                    con los cazafantasmas originales. Cuando un antiguo artefacto desata una fuerza maligna,
                                    los cazafantasmas nuevos y antiguos deben unirse para proteger el mundo.
                                </p>
                            </div>
                            <div class="rating">
                                <h2>Calificación:</h2>
                                <p>⭐⭐⭐ 3.3</p>
                                <p>Año de Lanzamiento: 2024 </p>
                                <p>Duración: 1h 56m</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Película 3 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Alien: Romulus</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster-container">
                            <div class="video-container">
                                <img style=" width: 100%;
            height: auto;" src="assets\img\ciencia ficcion 3.jpg" alt="Alien: Romulus" class="poster"
                                    onclick="playVideo('VIDEO_ID3')">
                                <iframe src="https://www.youtube.com/embed/WzWi3Mhv9Jg?si=4V1aYgJ-gzTpjn2c" frameborder="0" allowfullscreen
                                    class="hidden"></iframe>
                            </div>
                            <div class="actions">
                                <a href="crud/index.html" class="btn btn-danger">Eliminar</a>
                                <a href="crud/index.html" class="btn btn-primary">Editar</a>
                            </div>
                        </div>
                        <div class="movie-info-container">
                            <div class="synopsis">
                                <h2>Synopsis:</h2>
                                <p>
                                    Este thriller de terror y ciencia ficción nos transporta a las raíces de saga para
                                    contarnos como rebuscando en las profundidades de una estación espacial abandonada, un
                                    grupo de jóvenes colonizadores espaciales se encuentra cara a cara con la forma de vida
                                    más aterradora del universo.
                                </p>
                            </div>
                            <div class="rating">
                                <h2>Calificación:</h2>
                                <p>⭐⭐⭐⭐⭐ 9,0</p>
                                <p>Año de Lanzamiento: 2024 </p>
                                <p>Duración: 2h 30m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
