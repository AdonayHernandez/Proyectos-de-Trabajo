document.addEventListener("DOMContentLoaded", function() {
    // Realizar una solicitud al servidor para obtener los datos de las películas
    fetch("listar_peliculas.php")
        .then(response => response.json())
        .then(data => {
            const tablaPeliculas = document.getElementById("tablaPeliculas");
            tablaPeliculas.innerHTML = ""; // Limpiar la tabla antes de agregar nuevas filas

            // Iterar sobre los datos y agregar una fila por cada película
            data.forEach(pelicula => {
                const fila = document.createElement("tr");
                fila.innerHTML = `
                    <td>${pelicula.titulo}</td>
                    <td>${pelicula.calificacion}</td>
                    <td>${pelicula.anio}</td>
                    <td>${pelicula.sinopsis}</td>
                    <td>
                        <button onclick="editarPelicula(${pelicula.id})">Editar</button>
                        <button onclick="borrarPelicula(${pelicula.id})">Borrar</button>
                    </td>
                `;
                tablaPeliculas.appendChild(fila);
            });
        })
        .catch(error => console.error("Error al cargar las películas:", error));
});

function editarPelicula(id) {
    // Implementa la lógica para editar una película
}

function borrarPelicula(id) {
    // Implementa la lógica para borrar una película
}
