<?php
session_start();

// Verificar si se envió un formulario de inicio de sesión
if(isset($_POST['mail']) && isset($_POST['pass'])) {
    // Verificar las credenciales de inicio de sesión (aquí debes realizar la verificación con tu base de datos)
    $correo = $_POST['mail'];
    $contraseña = $_POST['pass'];
    if($correo === 'admin@example.com' && $contraseña === '123') { // Ejemplo de credenciales de administrador
        $_SESSION['admin'] = true;
        header("Location: ../admin.php");
        exit;
    } else {
        // Credenciales incorrectas, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
        header("Location: login_admin.php?error=1");
        exit;
    }
}
?>
