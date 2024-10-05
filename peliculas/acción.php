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

        /* Estilo para los botones de acciones */
        .actions {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .actions a {
            margin: 0 5px;
            padding: 5px 10px;
            font-size: 14px;
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
                        <h1>El Único</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%;
        height: auto;" src="assets\img\accion1.jpg" alt="El Único" class="poster"
                                    onclick="playVideo('VIDEO_ID1')">
                                <iframe src="https://www.youtube.com/embed/eSmXEBJXleQ?si=W-m3u7IKdjtXkBY3B"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-primary" onclick="showAlert('Estas seguro de Editarla')">Editar</a>
                            <a href="#" class="btn btn-danger" onclick="showAlert('Estas seguro de Eliminar esta película')">Eliminar</a>
                        </div>
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                En un futuro cercano, una tecnología llamada 'túnel cuántico' permite viajar entre
                                universos paralelos. Allí, el agente Law Gabe descubre que está en el punto de mira de
                                otra versión de si mismo
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 7.1/10</p>
                            <p>Año de Lanzamiento: 2001 </p>
                            <p>Duración: 1h 27m</p>
                        </div>
                    </div>
                </div>

                <!-- Película 2 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Romeo debe morir</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%;
        height: auto;" src="assets\img\accion 2.jpg" alt="Romeo debe morir" class="poster"
                                    onclick="playVideo('VIDEO_ID2')">
                                <iframe src="https://www.youtube.com/embed/_6QajoX9t2o?si=Mj_o6-H6jNGCTcmX"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-primary" onclick="showAlert('Estas seguro de Editarla')">Editar</a>
                            <a href="#" class="btn btn-danger" onclick="showAlert('Estas seguro de Eliminar esta película')">Eliminar</a>
                        </div>
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                Han quiere vengar la muerte de su hermano, miembro de una pandilla asiática que le
                                disputaba el control del puerto de Oakland a los gánsters afroamericanos. Pero todo se
                                complica cuando conoce a Trish, dado que ambos pertenecen a bandos opuestos
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐ 5.1/10</p>
                            <p>Año de Lanzamiento: 2024 </p>
                            <p>Duración: 1h 25m</p>
                        </div>
                    </div>
                </div>

                <!-- Película 3 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>New police story</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%;
        height: auto;" src="assets\img\accion 3.jpg" alt="New police story" class="poster"
                                    onclick="playVideo('VIDEO_ID3')">
                                <iframe src="https://www.youtube.com/embed/I0F0Yfs9Mpc?si=k5g02qB-395HlL1P"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-primary" onclick="showAlert('Estas seguro de Editarla')">Editar</a>
                            <a href="#" class="btn btn-danger" onclick="showAlert('Estas seguro de Eliminar esta película ')">Eliminar</a>
                        </div>
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                Todo el equipo del inspector Wing, de la policía de Hong Kong, ha sido asesinado por la
                                banda de Joe. Wing se convierte en un borracho hundido que se siente culpable por la
                                muerte de sus amigos. Pero un oficial novato sacará a Wing del pozo y ambos empezarán la
                                aventura para vengarse de Joe y de su banda de "Los Cinco".
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 6.9/10</p>
                            <p>Año de Lanzamiento: 2024 </p>
                            <p>Duración: 1h 57min</p>
                        </div>
                    </div>
                </div>

                <!-- Película 4 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>El Infiltrado</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%;
        height: auto;" src="assets\img\accion 4.jpg" alt="El Infiltrado" class="poster"
                                    onclick="playVideo('VIDEO_ID4')">
                                <iframe src="https://www.youtube.com/embed/Fjnc2IsRreo?si=f6762b9a1eeb45aa"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-primary" onclick="showAlert('Estas seguro de Editarla')">Editar</a>
                            <a href="#" class="btn btn-danger" onclick="showAlert('Estas seguro de Eliminar esta película')">Eliminar</a>
                        </div>
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                Un joven agente del FBI se infiltra en una banda de surfistas para investigar una serie
                                de robos. A medida que se adentra en el grupo, comienza a cuestionar su lealtad hacia
                                la ley y su identidad.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐⭐ 7.8/10</p>
                            <p>Año de Lanzamiento: 1991 </p>
                            <p>Duración: 2h 2m</p>
                        </div>
                    </div>
                </div>

                <!-- Película 5 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Amanecer Rojo</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%;
        height: auto;" src="assets\img\accion 5.jpg" alt="Amanecer Rojo" class="poster"
                                    onclick="playVideo('VIDEO_ID5')">
                                <iframe src="https://www.youtube.com/embed/WAeh7C9u4AQ?si=bfba2e163e514fe3"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-primary" onclick="showAlert('Estas seguro de Editarla')">Editar</a>
                            <a href="#" class="btn btn-danger" onclick="showAlert('Estas seguro de Eliminar esta película')">Eliminar</a>
                        </div>
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                En un futuro alternativo, un grupo de adolescentes rebeldes lidera una insurgencia
                                armada contra una invasión comunista de los Estados Unidos.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐ 6.4/10</p>
                            <p>Año de Lanzamiento: 1984 </p>
                            <p>Duración: 1h 54min</p>
                        </div>
                    </div>
                </div>

                <!-- Película 6 -->
                <div class="carousel-item">
                    <div class="page-header">
                        <h1>Asalto al Poder</h1>
                    </div>
                    <div class="movie-info">
                        <div class="movie-poster">
                            <div class="video-container">
                                <img style=" width: 100%;
        height: auto;" src="assets\img\accion 6.jpg" alt="Asalto al Poder" class="poster"
                                    onclick="playVideo('VIDEO_ID6')">
                                <iframe src="https://www.youtube.com/embed/ZxWLZxNlzWs?si=5750f3525b694e5d"
                                    frameborder="0" allowfullscreen class="hidden"></iframe>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-primary" onclick="showAlert('Estas seguro de Editarla')">Editar</a>
                            <a href="#" class="btn btn-danger" onclick="showAlert('Estas seguro de Eliminar esta película')">Eliminar</a>
                        </div>
                        <div class="synopsis">
                            <h2>Synopsis:</h2>
                            <p>
                                El agente del Servicio Secreto, Mike Banning, se encuentra atrapado dentro de la Casa
                                Blanca, con los terroristas que intentan secuestrar al Presidente de los Estados
                                Unidos.
                            </p>
                        </div>
                        <div class="rating">
                            <h2>Calificación:</h2>
                            <p>⭐⭐⭐ 6.5/10</p>
                            <p>Año de Lanzamiento: 2013 </p>
                            <p>Duración: 1h 59min</p>
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

        function showAlert(message) {
            var result = confirm(message);
            if (result) {
                window.location.href = './crud/index.html';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
