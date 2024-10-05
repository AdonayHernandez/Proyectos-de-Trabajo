<?php
require_once "Conexion.php";

class Pelicula extends Conexion {
    public function listarPeliculas() {
        $conexion = $this->conectar();
        $sql = "SELECT * FROM peliculas";
        $resultado = $conexion->query($sql);
        $peliculas = array();
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $peliculas[] = $fila;
            }
        }
        return $peliculas;
    }

    public function agregarPelicula($titulo, $enlace_trailer, $imagen) {
        $conexion = $this->conectar();
        $sql = "INSERT INTO peliculas (titulo, enlace_trailer, imagen) VALUES ('$titulo', '$enlace_trailer', '$imagen')";
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    public function eliminarPelicula($id) {
        $conexion = $this->conectar();
        $sql = "DELETE FROM peliculas WHERE id = $id";
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    // Método para actualizar una película si es necesario
}
?>
