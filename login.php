<?php
// Conectarse a la base de datos
$servername = "Localhost";
$usernamec = "root";
$passwordc = "";
$dbname = "bdlogin";
$conn = new mysqli($servername, $usernamec, $passwordc, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar los datos de inicio de sesión
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Verificar si los datos son correctos
if ($result->num_rows > 0) {
    echo "Bienvenido, has iniciado sesión correctamente.";
} else {
    echo "Datos de inicio de sesión inválidos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
