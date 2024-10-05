<?php
    $mysqli = new mysqli("localhost", "root", "", "pelicula");
    if ($mysqli->connect_errno) {
        die("Fallo la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }
    else {

    }
?>
<?php
class Conexion {
    private $host = "localhost";
    private $usuario = "tu_usuario";
    private $contrasena = "tu_contrasena";
    private $db = "peliculas_db";

    protected function conectar() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->db);
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        return $conexion;
    }
}
?>
